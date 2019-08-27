<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session, Log;
use App\Models\ToeShape;
use Illuminate\Support\Facades\File;


class ToeShapesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $toeShapes = ToeShape::orderBy('created_at', 'desc');

        $toeShapes = $toeShapes->paginate($perPage);

        $total = ToeShape::count();

        return view('admin.toe_shapes.index', compact('toeShapes', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.toe_shapes.create');
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
            'name_en' => 'required|unique:toe_shapes',
            'description_en' => 'html_required',
            'name_vi' => 'required|unique:toe_shapes',
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        //dd($requestData);
        //create shoe style
        $toeShape = ToeShape::create($requestData);

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($toeShape->id, $request);
        }

        //create relationship
        $toeShape->categories()->sync($request->get('shoe_category_ids'));

        Session::flash('flash_message', 'Created A Toe Shape!');

        return redirect('admin/toe-shapes');
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
        $toeShape = ToeShape::findOrFail($id);

        return view('admin.toe_shapes.show', compact('toeShape'));
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
        $toeShape = ToeShape::findOrFail($id);

        return view('admin.toe_shapes.edit', compact('toeShape'));
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
            'name_en' => "required|unique:toe_shapes,name_en,$id",
            'description_en' => 'html_required',
            'name_vi' => "required|unique:toe_shapes,name_vi,$id",
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);


        $requestData = $request->all();

        $toeShape = ToeShape::findOrFail($id);

        $toeShape->categories()->sync($request->get('shoe_category_ids'));

        $toeShape->update($requestData);

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($toeShape->id, $request);
        }

        Session::flash('flash_message', 'Updated Toe Shape!');

        return redirect('admin/toe-shapes');
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
        $toeShape = ToeShape::findOrFail($id);

        $toeShape->categories()->detach();

        $toeShape->delete();

        Session::flash('flash_message', 'Deleted A Toe Shape!');

        return redirect('admin/toe-shapes');
    }

    public function changeImage($id, Request $request)
    {
        $this->validate($request, [
            'picture' => 'required',
        ]);
        $toeShape = ToeShape::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $toeShape->id . '.' . $request->picture->getClientOriginalExtension();
        $request->picture->move(public_path(config('constants.TOE_SHAPE_FOLDER')), $photoName);

        // remove old file
        if (!empty($toeShape->picture)) {
            $oldFilePath = public_path(config('constants.TOE_SHAPE_FOLDER')) . '/' . $toeShape->picture;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $toeShape->picture = $photoName;
        $toeShape->save();

        return redirect('admin/toe-shapes/' . $id . '/edit');
    }


}
