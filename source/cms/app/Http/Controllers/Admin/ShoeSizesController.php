<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShoeSize;
use Illuminate\Http\Request;
use Session, Log;

class ShoeSizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $shoeSizes = ShoeSize::orderBy('created_at', 'desc');

        $shoeSizes = $shoeSizes->paginate($perPage);

        $total = ShoeSize::count();

        return view('admin.shoe_sizes.index', compact('shoeSizes', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.shoe_sizes.create');
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
            'value' => 'required|integer',
            'type' => 'required|integer'
        ]);

        $requestData = $request->all();

        //create a shoe size
        $shoeSize = ShoeSize::create($requestData);

        Session::flash('flash_message', 'Created A Shoe Size!');

        return redirect('admin/shoe-sizes');
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
        $shoeSize = ShoeSize::findOrFail($id);

        return view('admin.shoe_sizes.edit', compact('shoeSize'));
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
            'value' => 'required|integer',
            'type' => "required|integer"
        ]);

        $requestData = $request->all();

        $shoeSize = ShoeSize::findOrFail($id);

        $shoeSize->update($requestData);

        Session::flash('flash_message', 'Updated A Shoe Size!');

        return redirect('admin/shoe-sizes');
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
        $shoeSize = ShoeSize::findOrFail($id);

        $shoeSize->delete();

        Session::flash('flash_message', 'Deleted A Shoe Size!');

        return redirect('admin/shoe-sizes');
    }

}
