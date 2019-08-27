<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session, Log;
use App\Models\Leather;
use Illuminate\Support\Facades\File;


class LeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $leather = Leather::orderBy('created_at', 'desc');

        $leather = $leather->paginate($perPage);

        $total = Leather::count();

        return view('admin.leather.index', compact('leather', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.leather.create');
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
            'name_en' => 'required||unique:leather',
            'color_en' => 'required',
            'description_en' => 'html_required',
            'name_vi' => 'required||unique:leather',
            'color_vi' => 'required',
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        //create shoe style
        $leather = Leather::create($requestData);

        //create relationship
        $leather->categories()->sync($request->get('shoe_category_ids'));

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($leather->id, $request);
        }

        Session::flash('flash_message', 'Created A Type Of Leather!');

        return redirect('admin/leather');
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
        $leather = Leather::findOrFail($id);

        return view('admin.leather.show', compact('leather'));
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
        $leather = Leather::findOrFail($id);

        return view('admin.leather.edit', compact('leather'));
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
            'name_en' => "required|unique:leather,name_en,$id",
            'color_en' => 'required',
            'description_en' => 'html_required',
            'name_vi' => "required|unique:leather,name_vi,$id",
            'color_vi' => 'required',
            'description_vi' => 'html_required',
            'picture' => 'image|max_mb:2'
        ]);


        $requestData = $request->all();

        $leather = Leather::findOrFail($id);

        $leather->categories()->sync($request->get('shoe_category_ids'));

        $leather->update($requestData);

        //upload image
        if($request->hasFile('picture'))
        {
            $this->changeImage($leather->id, $request);
        }

        Session::flash('flash_message', 'Updated Leather!');

        return redirect('admin/leather');
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
        $leather = Leather::findOrFail($id);

        $leather->categories()->detach();

        $leather->delete();

        Session::flash('flash_message', 'Deleted A Type Of Leather!');

        return redirect('admin/leather');
    }

    public function changeImage($id, Request $request)
    {
        $this->validate($request, [
            'picture' => 'required',
        ]);
        $leather = Leather::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $leather->id . '.' . $request->picture->getClientOriginalExtension();
        $request->picture->move(public_path(config('constants.LEATHER_FOLDER')), $photoName);

        // remove old file
        if (!empty($leather->picture)) {
            $oldFilePath = public_path(config('constants.LEATHER_FOLDER')) . '/' . $leather->picture;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $leather->picture = $photoName;
        $leather->save();

        return redirect('admin/leather/' . $id . '/edit');
    }


}
