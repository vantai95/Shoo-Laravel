<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductFeature;
use App\Models\ProductFeatureDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


class ProductFeatureController extends Controller
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

        $feature = ProductFeature::orderBy('index');

        $feature = $feature->paginate($perPage);

        $total = ProductFeature::count();

        return view('admin.product_feature.index', compact('feature', 'total'));
    }

    private function getRecommendIndex()
    {
        $feature = ProductFeature::where('is_published', true)
            ->orderBy('index', 'desc')->take(1)->first();

        return !empty($feature) ? $feature->index + 1 : 0;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $recommendIndex = $this->getRecommendIndex();
        $features = ProductFeature::orderBy('index')->get();
        return view('admin.product_feature.create', compact('features', 'recommendIndex'));
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
            'title_en' => 'required|max:30',
            'description_en' => 'html_required|max:70',
            'title_vi' => 'required|max:30',
            'description_vi' => 'html_required|max:70',
            'is_published' => 'required',
            'index' => 'required|integer|between:1,20'
        ]);

        // create new product features
        $requestData = $request->all();
        if ($this->getRecommendIndex() != $requestData['index'])
        {
            $oldFeature = ProductFeature::where('index', $requestData['index'])->firstOrFail();
            $oldFeature->index = $this->getRecommendIndex();
            $oldFeature->save();
        }
        $feature = ProductFeature::create($requestData);

        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($feature->id, $request);
        }

        Session::flash('flash_message', 'Created A Product Feature!');
        return redirect('admin/product-feature');
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
        $feature = ProductFeature::findOrFail($id);

        return view('admin.product_feature.show', compact('feature'));
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
        $features = ProductFeature::orderBy('index')->get();
        $feature = ProductFeature::findOrFail($id);
        return view('admin.product_feature.edit', compact('feature', 'features'));
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
            'title_en' => 'required|max:30',
            'description_en' => 'html_required|max:70',
            'title_vi' => 'required|max:30',
            'description_vi' => 'html_required|max:70',
            'is_published' => 'required',
            'image' => 'image|max_mb:2',
            'index' => 'required|integer|between:1,20'
        ]);

        // update request data to product feature
        $requestData = $request->all();
        $feature = ProductFeature::findOrFail($id);

        // update index
        if ($feature->index != $requestData['index'])
        {
            $oldIndexOfFeature = $feature->index;
            $feature->index = 0;
            $feature->save();
            $oldFeature = ProductFeature::where('index', $requestData['index'])->firstOrFail();
            $oldFeature->index = $oldIndexOfFeature;
            $oldFeature->save();
        }
        $feature->update($requestData);
        if ($request->hasFile('image'))
        {
            $this->changeImage($feature->id, $request);
        }

        // return redirect with message
        Session::flash('flash_message', 'Updated Product Feature!');
        return redirect('admin/product-feature');
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
        $feature = ProductFeature::findOrFail($id);
        if ($feature->productFeatureDetails()->count() > 0) {
        //if (ProductFeatureDetail::where('product_feature', '=', $id)->count() > 0) {
            Session::flash('flash_error', 'Please delete product feature details first!');
        } else {
            $index = $feature->index;
            $features = ProductFeature::where('index','>',$index)->orderBy('index')
                ->get();

            ProductFeature::destroy($id);

            foreach($features as $item){
                $item->update(['index' => $item->index - 1]);
            }
            Session::flash('flash_message', 'Deleted Product Feature!');
        }
        return redirect('admin/product-feature');
    }

    /**
     * Upload Image to Product Feature
     *
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function changeImage($id, Request $request)
    {
        $feature = ProductFeature::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $feature->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.PRODUCT_FEATURE_IMG_FOLDER')), $photoName);

        // remove old file
        if (!empty($feature->image)) {
            $oldFilePath = public_path(config('constants.PRODUCT_FEATURE_IMG_FOLDER')) . '/' . $feature->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update product feature image
        $feature->image = $photoName;
        $feature->save();

        return $feature;
    }

}
