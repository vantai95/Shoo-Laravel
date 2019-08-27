<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Session, Log;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $slider = Slider::orderBy('created_at', 'desc');

        $slider = $slider->paginate($perPage);

        $total = Slider::count();

        return view('admin.slider.index', compact('slider', 'total'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'title_en' => 'max:40',
            'description_en' => 'max:100',
            'title_vi' => 'max:40',
            'description_vi' => 'max:100',
            'image' => 'image|max_mb:2',
        ]);

        $requestData = $request->all();

        $slider = Slider::create($requestData);

        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($slider->id, $request);
        }

        Session::flash('flash_message', 'Add a new slider!');

        return redirect('admin/slider');
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
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
            'title_en' => 'max:40',
            'description_en' => 'max:100',
            'title_vi' => 'max:40',
            'description_vi' => 'max:100',
            'image' => 'image|max_mb:2',
        ]);

        $requestData = $request->all();

        $slider = Slider::findOrFail($id);

        $slider->update($requestData);
        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($slider->id, $request);
        }

        Session::flash('flash_message', 'Updated Slider!');

        return redirect('admin/slider');
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

        Slider::destroy($id);

        Session::flash('flash_message', 'Deleted a slider!');

        return redirect('admin/slider');
    }

    public function changeImage($id, Request $request)
    {
        $slider = Slider::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $slider->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.SLIDER_FOLDER')), $photoName);

        // remove old file
        if (!empty($slider->image)) {
            $oldFilePath = public_path(config('constants.SLIDER_FOLDER')) . '/' . $slider->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update product slider image
        $slider->image = $photoName;
        $slider->save();

        return redirect("admin/slider/$slider->id/edit");
    }

}
