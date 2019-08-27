<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;
use Session, Log;
use Illuminate\Support\Facades\File;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $video = Configuration::orderBy('created_at', 'desc');

        $video = $video->paginate($perPage);

        $total = Configuration::count();

        return view('admin.video.index', compact('video', 'total'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.video.create');
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
        $validateList = [
            'config_key' => Configuration::CONFIG_KEYS['HOME_VIDEO'],
            'config_value' => 'required|url',
            'is_published' => 'required',
            'title_en' => 'required',
            'title_vi' => 'required',
        ];

        $message = [
            'config_value.url' => 'Video URL must be an invalid URL and valid format',
            'config_value.required' => 'Video URL is required'
        ];

        $this->validate($request,$validateList,$message);


        $requestData = $request->all();
        $requestData['config_key'] = Configuration::CONFIG_KEYS['HOME_VIDEO'];
        Configuration::create($requestData);

        Session::flash('flash_message', 'Add a new video!');

        return redirect('admin/video');
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
        $video = Configuration::findOrFail($id);

        return view('admin.video.show', compact('video'));
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
        $video = Configuration::findOrFail($id);

        return view('admin.video.edit', compact('video'));
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
        $validateList = [
            'config_key' => Configuration::CONFIG_KEYS['HOME_VIDEO'],
            'config_value' => 'required|url',
            'is_published' => 'required',
            'title_en' => 'required',
            'title_vi' => 'required',
        ];

        $message = [
            'config_value.url' => 'Video URL must be an invalid URL and valid format',
            'config_value.required' => 'Video URL is required'
        ];

        $this->validate($request,$validateList,$message);

        $requestData = $request->all();

        $video = Configuration::findOrFail($id);

        $video->update($requestData);

        Session::flash('flash_message', 'Updated Video!');

        return redirect('admin/video');
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

        Configuration::destroy($id);

        Session::flash('flash_message', 'Deleted a video!');

        return redirect('admin/video');
    }

}
