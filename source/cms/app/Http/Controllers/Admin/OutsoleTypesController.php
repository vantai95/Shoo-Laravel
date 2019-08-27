<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session, Log;
use App\Models\OutsoleTypes;
use Illuminate\Support\Facades\File;


class OutsoleTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $outsoleTypes = OutsoleTypes::orderBy('created_at', 'desc');

        $outsoleTypes = $outsoleTypes->paginate($perPage);

        $total = OutsoleTypes::count();

        return view('admin.outsole_types.index', compact('outsoleTypes', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.outsole_types.create');
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
            'shoe_category_ids' => 'required',
            'name_en' => 'required|unique:outsole_types',
            'description_en' => 'html_required',
            'name_vi' => 'required|unique:outsole_types',
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        //create outsole type
        $outsoleTypes = OutsoleTypes::create($requestData);

        //create relationship
        $outsoleTypes->categories()->sync($request->get('shoe_category_ids'));

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($outsoleTypes->id, $request);
        }

        Session::flash('flash_message', 'Created A Type Of Outsole!');

        return redirect('admin/outsole-types');
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
        $outsoleTypes = OutsoleTypes::findOrFail($id);

        return view('admin.outsole_types.show', compact('outsoleTypes'));
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
        $outsoleType = OutsoleTypes::findOrFail($id);

        return view('admin.outsole_types.edit', compact('outsoleType'));
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
            'shoe_category_ids' => 'required',
            'name_en' => "required|unique:outsole_types,name_en,$id",
            'description_en' => 'html_required',
            'name_vi' => "required|unique:outsole_types,name_vi,$id",
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);


        $requestData = $request->all();

        $outsoleType = OutsoleTypes::findOrFail($id);

        $outsoleType->categories()->sync($request->get('shoe_category_ids'));

        $outsoleType->update($requestData);

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($outsoleType->id, $request);
        }

        Session::flash('flash_message', 'Updated Outsole Types!');

        return redirect('admin/outsole-types');
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
        $outsoleType = OutsoleTypes::findOrFail($id);

        $outsoleType->categories()->detach();

        $outsoleType->delete();

        Session::flash('flash_message', 'Deleted A Type Of Outsole!');

        return redirect('admin/outsole-types');
    }

    public function changeImage($id, Request $request)
    {
        $this->validate($request, [
            'picture' => 'required',
        ]);
        $outsoleType = OutsoleTypes::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $outsoleType->id . '.' . $request->picture->getClientOriginalExtension();
        $request->picture->move(public_path(config('constants.OUTSOLE_TYPE_FOLDER')), $photoName);

        // remove old file
        if (!empty($outsoleType->picture)) {
            $oldFilePath = public_path(config('constants.OUTSOLE_TYPE_FOLDER')) . '/' . $outsoleType->picture;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $outsoleType->picture = $photoName;
        $outsoleType->save();

        return redirect('admin/outsole-types/' . $id . '/edit');
    }


}
