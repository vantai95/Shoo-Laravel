<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductFeatureDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductFeatureDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');
        $total = ProductFeatureDetail::count();
        $posts = ProductFeatureDetail::orderBy('created_at', 'desc')->paginate($perPage);
        return view('admin.product_feature_details.index', compact('posts', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product_feature_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // validation request data
        $this->validate($request, [
            'image' => 'image|max_mb:2',
            'title_en' => 'required|max:100',
            'content_en' => 'html_required',
            'title_vi' => 'required|max:100',
            'content_vi' => 'html_required',
            'is_published' => 'required',
        ]);

        // create new product features
        $requestData = $request->all();
        $requestData['owner'] = Auth::user()->id;
        $post = ProductFeatureDetail::create($requestData);
        $post->slug = str_slug($requestData['title_en'], '-') . "-$post->id";
        $post->save();

        // upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($post->id, $request);
        }


        Session::flash('flash_message', 'Created A Product Feature Detail!');
        return redirect('admin/pf-details');
    }

    /**
     * Upload new or update product feature detail image.
     *
     * @param  int $id
     *
     * @param Request $request
     * @return \App\Models\ProductFeatureDetail
     */
    public function changeImage($id, Request $request)
    {
        $post = ProductFeatureDetail::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $post->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER')), $photoName);

        // remove old file
        if (!empty($post->image)) {
            $oldFilePath = public_path(config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER')) . '/' . $post->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        // update product feature image
        $post->image = $photoName;
        $post->save();
        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $feature = ProductFeatureDetail::findOrFail($id);
        return view('admin.product_feature_details.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $feature = ProductFeatureDetail::findOrFail($id);
        return view('admin.product_feature_details.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        // validation request data
        $this->validate($request, [
            'title_en' => 'required|max:100',
            'content_en' => 'html_required',
            'title_vi' => 'required|max:100',
            'content_vi' => 'html_required',
            'is_published' => 'required',
            'image' => 'image|max_mb:2',
        ]);

        // update request data to product feature
        $requestData = $request->all();
        $requestData['slug'] = str_slug($requestData['title_en'], '-') . "-$id";
        $feature = ProductFeatureDetail::findOrFail($id);
        $feature->update($requestData);
        if ($request->hasFile('image'))
        {
            $this->changeImage($feature->id, $request);
        }

        // return redirect with message
        Session::flash('flash_message', 'Updated Product Feature Detail!');
        return redirect('admin/pf-details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $post = ProductFeatureDetail::findOrFail($id);
        // remove old file
        if (!empty($post->image)) {
            $oldFilePath = public_path(config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER')) . '/' . $post->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        ProductFeatureDetail::destroy($id);
        Session::flash('flash_message', 'Deleted Product Feature Details!');
        return redirect('admin/pf-details');
    }

}
