<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShoeCategory;
use Illuminate\Http\Request;
use Session, Log;
use App\Models\ShoeStylePicture;


class ShoeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $shoeCategories = ShoeCategory::orderBy('created_at', 'desc');

        $shoeCategories = $shoeCategories->paginate($perPage);

        $total = ShoeCategory::count();

        return view('admin.shoe_categories.index', compact('shoeCategories', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.shoe_categories.create');
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
            'name_en' => 'required|unique:shoe_categories|regex:/^[\pL\s\-]+$/u',
            'name_vi' => 'required|unique:shoe_categories|regex:/^[\pL\s\-]+$/u',

        ]);

        $requestData = $request->all();
        ShoeCategory::create($requestData);
        Session::flash('flash_message', 'Created A Shoes Category!');

        return redirect('admin/shoe-categories');
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
        $shoeCategories = ShoeCategory::findOrFail($id);

        return view('admin.shoe_categories.show', compact('shoeCategories'));
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
        $shoeCategories = ShoeCategory::findOrFail($id);

        return view('admin.shoe_categories.edit', compact('shoeCategories'));
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
        $shoeCategories = ShoeCategory::findOrFail($id);
        if ($request->name_en == $shoeCategories->name_en && $request->name_vi == $shoeCategories->name_vi) {
            return back()->withInput($request->all())->withErrors(['name' => ['Nothing change!']]);
        }
        $this->validate($request, [
            'name_en' => "required|unique:shoe_categories,name_en,$id|regex:/^[\pL\s\-]+$/u",
            'name_vi' => "required|unique:shoe_categories,name_vi,$id|regex:/^[\pL\s\-]+$/u",
        ]);

        $requestData = $request->all();

        $shoeCategories->update($requestData);

        Session::flash('flash_message', 'Updated Shoes Category!');

        return redirect('admin/shoe-categories');
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
        $shoeCategories = ShoeCategory::findOrFail($id);

        if (!$shoeCategories->canDelete()) {

            Session::flash('flash_error', 'Can not delete this shoes category');

        } else {
            //delete relationship with shoe type
            $shoeCategories->shoeTypes()->detach();

            //delete relationship with toe shape
            $shoeCategories->toeShapes()->detach();

            //delete relationship with leather
            $shoeCategories->leather()->detach();

            //delete relationship with outsole
            $shoeCategories->outsoleTypes()->detach();

            $shoeCategories->delete();

            Session::flash('flash_message', 'Deleted A Shoes Category!');
        }

        return redirect('admin/shoe-categories');
    }

}
