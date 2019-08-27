<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShoeStyles;
use Illuminate\Http\Request;
use App\Services\CommonService;
use Session, Log;
use App\Models\ShoeTypes;
use Illuminate\Support\Facades\File;


class ShoeStylesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('q');
        $perPage = config('constants.PAGE_SIZE');
        $shoe_types_id = $request->get('shoe_types_id');

        $shoeStyles = ShoeStyles::orderBy('shoe_styles.main_name_en')->select(['shoe_styles.*']);

        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $shoeStyles = $shoeStyles->where('shoe_styles.main_name_en', 'LIKE', $keyword)
                ->orWhere('shoe_styles.sub_name_en','LIKE', $keyword);
        }

        if (!empty($shoe_types_id)) {
            $shoeStyles = $shoeStyles->join('shoe_types', 'shoe_types.id', 'shoe_styles.shoe_types_id')
                ->where('shoe_styles.shoe_types_id', $shoe_types_id);
        }

//        dd($shoeStyles->get());

        $shoeStyles = $shoeStyles->paginate($perPage);

        $total = ShoeStyles::count();

        return view('admin.shoe_styles.index', compact('shoeStyles', 'total', 'shoe_types_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {       
        
        $defaultImage = url(config('constants.DEFAULT_SHOE_STYLE_IMG'));
        return view('admin.shoe_styles.create', compact('defaultImage'));
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
            'price' => 'numeric|min:100',
            'discount_price' => 'numeric|min:0'
        ]);

        $requestData = $request->all();
        //create shoe type
        $shoeStyle = ShoeStyles::create($requestData);
        $shoeStyle->slug = str_slug($requestData['sub_name_en'], '-') . "-$shoeStyle->id";
        $shoeStyle->save();

        //upload image
        $this->changeImage($shoeStyle->id, $request);
        

        Session::flash('flash_message', 'Created A Shoes Style!');

        return redirect('admin/shoe-styles');
    }

    public function changeImage($id, Request $request)
    {
        $shoeStyle = ShoeStyles::findOrFail($id);
        // create new file        
        $requestData = $request->all();
       /*
        $images = json_decode($requestData['images']);
        if(empty($images)){
            $images = [];
        }
        if ($request->hasFile('images_url')) {
            foreach ($request->images_url as $key=>$image_url) {
                $photoName = time() . '.' . $shoeStyle->id . '.' . $key . '.' . $image_url->getClientOriginalExtension();
                $image_url->move(public_path(config('constants.SHOE_STYLES_FOLDER')), $photoName);
                // update shoe type image
                array_push($images, $photoName);
            }
        }*/
        $old_images = json_decode($requestData['images']);
        if(empty($old_images)){
            $old_images = [];
        }
        $images=[];
        for($i=0;$i<4;$i++){
            if ($request->hasFile('image'.$i)) {
                $image_url='';
                switch($i){
                    case 0: $image_url = $request->file('image0');break;
                    case 1: $image_url = $request->file('image1');break;
                    case 2: $image_url = $request->file('image2');break;
                    case 3: $image_url = $request->file('image3');break;
                }                     
                $photoName = time() . '.' . $shoeStyle->id . '.' . $i . '.' . $image_url[0]->getClientOriginalExtension();
                $image_url[0]->move(public_path(config('constants.SHOE_STYLES_FOLDER')), $photoName);
                // update shoe type image
                array_push($images, $photoName);
            }else{
                if(isset($old_images[$i])){
                    array_push($images, $old_images[$i]);
                }
                else{
                    array_push($images, "");
                }   
            }    
        }
        $shoeStyle->images = json_encode($images);
        $shoeStyle->save();
        return redirect('admin/shoe-styles/' . $id . '/edit');
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
        $shoeStyle = ShoeStyles::findOrFail($id);

        return view('admin.shoe_styles.show', compact('shoeStyle'));
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
        $defaultImage = url(config('constants.DEFAULT_SHOE_STYLE_IMG'). '/');
        $shoeStyle = ShoeStyles::findOrFail($id);

        return view('admin.shoe_styles.edit', compact('shoeStyle','defaultImage'));
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
            'price' => 'numeric|min:100',
            'discount_price' => 'numeric|min:0',
            'images_url' => 'array'
        ]);

        $requestData = $request->all();

        $requestData['slug'] = str_slug($requestData['sub_name_en'], '-') . "-$id";

        $shoeStyle = ShoeStyles::findOrFail($id);

        $shoeStyle->update($requestData);

        //upload image
        $this->changeImage($shoeStyle->id, $request);
       

        Session::flash('flash_message', 'Updated Shoes Style!');

        return redirect('admin/shoe-styles');
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
        $shoeType = ShoeStyles::findOrFail($id);

//        $shoeType->categories()->detach();

        ShoeStyles::destroy($id);

        Session::flash('flash_message', 'Deleted A Shoes Style!');

        return redirect('admin/shoe-styles');
    }

}
