<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShoeTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Log;
use Illuminate\Support\Facades\File;


class ShoeTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $shoeTypes = ShoeTypes::orderBy('index');

        $shoeTypes = $shoeTypes->paginate($perPage);

        $total = ShoeTypes::count();

        return view('admin.shoe_types.index', compact('shoeTypes', 'total'));
    }

    private function getRecommendIndex()
    {
        $feature = ShoeTypes::orderBy('index', 'desc')->take(1)->first();
        return !empty($feature) ? $feature->index + 1 : 0;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $recommendIndex = $this->getRecommendIndex();
        $types = ShoeTypes::orderBy('index')->get();
        return view('admin.shoe_types.create', compact('types', 'recommendIndex'));
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
            'name_en' => 'required|unique:shoe_types|regex:/^[\pL\s\-]+$/u',
            'description_en' => 'html_required',
            'name_vi' => 'required|unique:shoe_types|regex:/^[\pL\s\-]+$/u',
            'description_vi' => 'html_required',
            'image_url' => 'image|max_mb:2',
            'index' => 'required|integer|between:1,20'
        ]);

        $requestData = $request->all();
        if ($this->getRecommendIndex() != $requestData['index'])
        {
            $old = ShoeTypes::where('index', $requestData['index'])->firstOrFail();
            $old->index = $this->getRecommendIndex();
            $old->save();
        }

        //create shoe type
        $shoeType = ShoeTypes::create($requestData);
        $shoeType->slug = str_slug($requestData['name_en'], '-') . "-$shoeType->id";
        $shoeType->save();

        //create relationship
        $shoeType->categories()->sync($request->get('shoe_category_ids'));

        //upload image
        if($request->hasFile('image_url'))
        {
            $this->changeImage($shoeType->id, $request);
        }

        Session::flash('flash_message', 'Created A Model!');

        return redirect('admin/shoe-types');
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
        $shoeType = ShoeTypes::findOrFail($id);

        return view('admin.shoe_types.show', compact('shoeType'));
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
        $shoeType = ShoeTypes::findOrFail($id);
        $types = ShoeTypes::orderBy('index')->get();
        return view('admin.shoe_types.edit', compact('shoeType', 'types'));
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
            'name_en' => "required|unique:shoe_types,name_en,$id|regex:/^[\pL\s\-]+$/u",
            'description_en' => 'html_required',
            'name_vi' => "required|unique:shoe_types,name_vi,$id",
            'description_vi' => 'html_required',
            'image_url' => 'image|max_mb:2',
            'index' => 'required|integer|between:1,20'
        ]);

        $requestData = $request->all();
        $shoeType = ShoeTypes::findOrFail($id);

        $shoeType->categories()->sync($request->get('shoe_category_ids'));

        // update index
        if ($shoeType->index != $requestData['index'])
        {
            $oldIndexOfType = $shoeType->index;
            $shoeType->index = 0;
            $shoeType->save();
            $oldType = ShoeTypes::where('index', $requestData['index'])->firstOrFail();
            $oldType->index = $oldIndexOfType;
            $oldType->save();
        }
        
        $requestData['slug'] = str_slug($requestData['name_en'], '-') . "-$id";

        $shoeType->update($requestData);
        //upload image
        if($request->hasFile('image_url'))
        {
            $this->changeImage($shoeType->id, $request);
        }

        Session::flash('flash_message', 'Updated Model!');

        return redirect('admin/shoe-types');
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
        $shoeType = ShoeTypes::findOrFail($id);

        if (!$shoeType->canDelete())
        {
            Session::flash('flash_error', 'Can not delete this model');

        } else {
            $index = $shoeType->index;
            $shoeTypes = ShoeTypes::where('index','>',$index)->orderBy('index')
                ->get();
            $shoeType->categories()->detach();

            $shoeType->delete();
            foreach($shoeTypes as $item){
                $item->update(['index' => $item->index - 1]);
            }

            Session::flash('flash_message', 'Deleted Model!');
        }

        return redirect('admin/shoe-types');
    }

    public function changeImage($id, Request $request)
    {
        $shoeType = ShoeTypes::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $shoeType->id . '.' . $request->image_url->getClientOriginalExtension();
        $request->image_url->move(public_path(config('constants.SHOE_TYPE_FOLDER')), $photoName);

        // remove old file
        if (!empty($shoeType->image_url)) {
            $oldFilePath = public_path(config('constants.SHOE_TYPE_FOLDER')) . '/' . $shoeType->image_url;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update shoe type image
        $shoeType->image_url = $photoName;
        $shoeType->save();

        return redirect('admin/shoe-types/' . $id . '/edit');
    }

}
