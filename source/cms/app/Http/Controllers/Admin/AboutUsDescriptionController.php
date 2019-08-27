<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsDescription;
use Illuminate\Support\Facades\Session;
use File;

class AboutUsDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $AboutUsDescriptions = AboutUsDescription::orderBy('created_at', 'desc');

        $AboutUsDescriptions = $AboutUsDescriptions->paginate($perPage);

        return view('admin.about_us_description.index', compact('AboutUsDescriptions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $AboutUsDescription = AboutUsDescription::findOrFail($id);

        return view('admin.about_us_description.show', compact('AboutUsDescription'));
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
        $AboutUsDescription = AboutUsDescription::findOrFail($id);

        return view('admin.about_us_description.edit', compact('AboutUsDescription'));
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
            'description' => 'html_required'
//            'sub_description' => 'html_required',
        ]);

        $requestData = $request->all();

        $AboutUsDescription = AboutUsDescription::findOrFail($id);

        $AboutUsDescription->update($requestData);

        Session::flash('flash_message', 'Updated About Us Description!');

        return redirect('admin/about-us-description');
    }


}
