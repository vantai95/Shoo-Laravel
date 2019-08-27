<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlagshipStyle;
use Illuminate\Http\Request;
use Session, File;


class FlagshipStylesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $flagshipStyles = FlagshipStyle::orderBy('created_at', 'desc');

        $flagshipStyles = $flagshipStyles->paginate($perPage);

        $total = FlagshipStyle::count();

        return view('admin.flagship_styles.index', compact('flagshipStyles', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.flagship_styles.create');
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
            'image_url' => 'image|max_mb:2',
            'name_en' => 'required|unique:flagship_styles,name_en',
            'description_en' => 'html_required',
            'name_vi' => 'required|unique:flagship_styles,name_vi',
            'description_vi' => 'html_required'
        ]);

        $requestData = $request->all();

        $flagshipStyle = FlagshipStyle::create($requestData);

        //upload image
        if($request->hasFile('image_url'))
        {
            $this->changeImage($flagshipStyle->id, $request);
        }

        Session::flash('flash_message', 'Created A Flagship Style!');

        return redirect('admin/flagship-styles');
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
        $flagshipStyle = FlagshipStyle::findOrFail($id);

        return view('admin.flagship_styles.show', compact('flagshipStyle'));
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
        $flagshipStyle = FlagshipStyle::findOrFail($id);

        return view('admin.flagship_styles.edit', compact('flagshipStyle'));
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
            'name_en' => "required|unique:flagship_styles,name_en,$id",
            'name_vi' => "required|unique:flagship_styles,name_vi,$id",
            'image_url' => 'image|max_mb:2',
            'description_en' => 'html_required',
            'description_vn' => 'html_required'
        ]);

        $requestData = $request->all();

        $flagshipStyle = FlagshipStyle::findOrFail($id);

        $flagshipStyle->update($requestData);

        //upload image
        if($request->hasFile('image_url'))
        {
            $this->changeImage($flagshipStyle->id, $request);
        }

        Session::flash('flash_message', 'Updated Flagship Style!');

        return redirect('admin/flagship-styles');
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

        FlagshipStyle::destroy($id);

        Session::flash('flash_message', 'Deleted A Flagship Style!');

        return redirect('admin/flagship-styles');
    }

    public function changeImage($id, Request $request)
    {
        $flagshipStyle = FlagshipStyle::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $flagshipStyle->id . '.' . $request->image_url->getClientOriginalExtension();
        $request->image_url->move(public_path(config('constants.FLAGSHIP_STYLE_FOLDER')), $photoName);

        // remove old file
        if (!empty($flagshipStyle->image_url)) {
            $oldFilePath = public_path(config('constants.FLAGSHIP_STYLE_FOLDER')) . '/' . $flagshipStyle->image_url;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update shoe type image
        $flagshipStyle->image_url = $photoName;
        $flagshipStyle->save();

        return redirect('admin/flagship-styles/' . $id . '/edit');
    }


}
