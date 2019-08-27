<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Session;
use File;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $aboutUsImages = AboutUs::orderBy('created_at', 'desc');

        $aboutUsImages = $aboutUsImages->paginate($perPage);

        $total = AboutUs::count();

        return view('admin.about_us.index', compact('aboutUsImages', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.about_us.create');
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
        $this->validate($request, [
            'image' => 'image|max_mb:2',
        ]);

        $requestData = $request->all();

        $aboutUsImage = AboutUs::create($requestData);

        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($aboutUsImage->id, $request);
        }

        Session::flash('flash_message', 'Created About Us Image!');

        return redirect('admin/about-us-image');
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
        $aboutUsImage = AboutUs::findOrFail($id);

        return view('admin.about_us.show', compact('aboutUsImage'));
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
        $aboutUsImage = AboutUs::findOrFail($id);

        return view('admin.about_us.edit', compact('aboutUsImage'));
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
        $this->validate($request, [
            'image' => 'image|max_mb:2',
        ]);

        $requestData = $request->all();

        $aboutUsImage = AboutUs::findOrFail($id);

        $aboutUsImage->update($requestData);

        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($aboutUsImage->id, $request);
        }

        Session::flash('flash_message', 'Updated About Us Image!');

        return redirect('admin/about-us-image');
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

        AboutUs::destroy($id);

        Session::flash('flash_message', 'Deleted About Us Image!');

        return redirect('admin/about-us-image');
    }

    public function changeImage($id, Request $request)
    {
        $aboutUsImage = AboutUs::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $aboutUsImage->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.ABOUT_US_FOLDER')), $photoName);

        // remove old file
        if (!empty($aboutUsImage->image)) {
            $oldFilePath = public_path(config('constants.ABOUT_US_FOLDER')) . '/' . $aboutUsImage->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update shoe type image
        $aboutUsImage->image = $photoName;
        $aboutUsImage->save();

        return redirect('admin/about-us-image/' . $id . '/edit');
    }

}
