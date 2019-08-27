<?php

namespace App\Http\Controllers\Admin;

use App\Models\Configuration;
use App\Models\PageMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Services\CommonService;
use Log;

class PageController extends Controller
{
    public function indiegogo(Request $request)
    {
        $keyword = $request->get('q');
        $indiegogo = Page::where('page_name_en', Page::CONSTANTS['INDIEGOGO'])->firstOrFail();
        $details = $indiegogo->meta()->where('key', PageMeta::CONSTANTS['DETAIL']);
        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $details = $details->where(function ($query) use ($keyword) {
                $query->orWhere('key', 'LIKE', $keyword);
                $query->orWhere('value', 'LIKE', $keyword);
            });
        }
        $details = $details->get();
        return view('admin.pages.indiegogo.index', compact('indiegogo', 'details'));
    }

    public function otherPages(Request $request, $name) {
        $page = Page::where('page_name_en', Page::CONSTANTS[$name])->first();

        if (!$page) {
            // page does not exists then create it
            $page = Page::create([
                'page_name_en' => $name,
                'is_published' => true
            ]);
        }

        $details = $page->meta()->where('key', PageMeta::CONSTANTS['DETAIL']);
        $details = $details->get();
        return view('admin.pages.others.index', compact('page', 'details'));
    }
    public function filterParamsRequest($request) {
        $paramsWithLang = [];
        $paramsNormal = [];
        foreach ($request as $key => $value) {
            $param = substr($key, 0, strpos($key, '_'));
            if($param != '' && in_array($param, $paramsWithLang) == false)
                array_push($paramsWithLang, $param);
            else if ($key != '_token' && in_array($param, $paramsWithLang) == false)
                array_push($paramsNormal, $key);
        }
        Log::error('$paramsWithLang');
        Log::error($paramsWithLang);
        Log::error('$paramsNormal');
        Log::error($paramsNormal);
        return ['params-with-lang'=> $paramsWithLang, 'params-normal'=> $paramsNormal];
    }
    public function otherPagesStoreOrUpdate(Request $request, $name) {
        Log::error($request);
        $validateList = [
            'detail_en' => 'required',
            'detail_vi' => 'required'
        ];
        $paramsRequest = $this->filterParamsRequest($request->all())['params-with-lang'];
        $this->validate($request, $validateList);
        $page = Page::where('page_name_en', Page::CONSTANTS[$name])->firstOrFail();
        unset($request['_token']);
        $metas = $page->meta();
        foreach ($paramsRequest as $paramRequest) {
            $item = $metas->where('key', $paramRequest)->first();
            if ($item == null) {
                $item = PageMeta::create([
                    'page_id' => $page->id,
                    'value_en' => $request[$paramRequest . '_en'],
                    'value_vi' => $request[$paramRequest . '_vi'],
                    'available' => true
                ]);
            } else {
                $item->update([
                    'page_id' => $page->id,
                    'value_en' => $request[$paramRequest . '_en'],
                    'value_vi' => $request[$paramRequest . '_vi'],
                    'available' => true
                ]);
            }
        }
        $item = null;
        Session::flash('flash_message', 'Page updated!');
        return back();
    }
    public function indiegogoStoreOrUpdate(Request $request)
    {
        Log::error($request);
        $validateList = [
            'title_en' => 'required',
            'title_vi' => 'required',
            'video' => 'required|url',
            'description_en' => 'required',
            'description_vi' => 'required',
            'ratings_en' => 'required',
            'ratings_vi' => 'required',
            'youtube' => 'required|url',
            'facebook' => 'required|url',
            'detail_en' => 'required',
            'detail_vi' => 'required'
        ];

        $message = [
            'video.url' => 'Video URL must be an valid URL and valid format',
            'youtube.url' => 'Youtube URL must be and valid URL and valid format',
            'facebook.url' => 'Facebook URL must be and valid URL and valid format',
        ];

        $this->validate($request,$validateList,$message);

        $indiegogo = Page::where('page_name_en', Page::CONSTANTS['INDIEGOGO'])->firstOrFail();

        $requestData = $request->all();

        unset($requestData['_token']);
        $metas = $indiegogo->meta;
        $paramsWithLang = $this->filterParamsRequest($request->all())['params-with-lang'];
        foreach ($paramsWithLang as $paramWithLang) {
            $item = $metas->where('key', $paramWithLang)->first();
            if ($item == null) {
                $item = PageMeta::create([
                    'page_id' => $indiegogo->id,
                    'value_en' => $request[$paramWithLang . '_en'],
                    'value_vi' => $request[$paramWithLang . '_vi'],
                    'available' => true
                ]);
            } else {
                $item->update([
                    'page_id' => $indiegogo->id,
                    'value_en' => $request[$paramWithLang . '_en'],
                    'value_vi' => $request[$paramWithLang . '_vi'],
                    'available' => true
                ]);
            }
            $item = null;
        }
        $paramsNormal = $this->filterParamsRequest($request->all())['params-normal'];
        foreach ($paramsNormal as $paramNormal) {
            $item = $metas->where('key', $paramNormal)->first();
            if ($item == null) {
                $item = PageMeta::create([
                    'page_id' => $indiegogo->id,
                    'value_en' => $request[$paramNormal],
                    'value_vi' => $request[$paramNormal],
                    'available' => true
                ]);
            } else {
                $item->update([
                    'page_id' => $indiegogo->id,
                    'value_en' => $request[$paramNormal],
                    'value_vi' => $request[$paramNormal],
                    'available' => true
                ]);
            }
            $item = null;
        }
        Session::flash('flash_message', 'Indiegogo page updated!');
        return back();
    }


    public function createDetail()
    {
        return view('admin.pages.indiegogo.detail_create');
    }

    public function storeDetail(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'image' => 'image|max_mb:2',
            'available' => 'required',
        ]);
        $requestData = $request->all();

        $indiegogo = Page::where('page_name_en', Page::CONSTANTS['INDIEGOGO'])->firstOrFail();
        $meta = PageMeta::create([
            'page_id' => $indiegogo->id,
            'key' => PageMeta::CONSTANTS['DETAIL'],
            'value_en' => $requestData['description'],
            'value_vi' => $requestData['description'],
//            'available' => $requestData['is_published']
        ]);
        $image = PageMeta::create([
            'page_id' => $meta->id,
            'key' => PageMeta::CONSTANTS['IMAGE'],
            'value_en' => '',
            'value-vi' => '',
            'available' => true
        ]);
        if ($request->hasFile('image')) {
            $this->uploadImage($request, $image->id);
        }
        Session::flash('flash_message', 'Created indiegogo page detail!');
        return redirect('admin/pages/indiegogo');
    }

    public function uploadImage(Request $request, $id)
    {
        $image = PageMeta::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $image->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.PAGE_FOLDER')), $photoName);
        // remove old file
        if (!empty($image->value)) {
            $oldFilePath = public_path(config('constants.PAGE_FOLDER')) . '/' . $image->value;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        // update product feature image
        $image->value = $photoName;
        $image->save();
        return $image;
    }

    public function editDetail($id)
    {
        $detail = PageMeta::findOrFail($id);
        return view('admin.pages.indiegogo.detail_edit', compact('detail'));
    }

    public function updateDetail(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
            'image' => 'image|max_mb:2',
            'available' => 'required',
        ]);
        $detail = PageMeta::findOrFail($id);
        $requestData = $request->all();
        $detail->update([
            'value_en' => $requestData['description'],
            'value_vi' => $requestData['description'],
            'available' => $requestData['available']
        ]);
        $image = $detail->images()->first();
        if ($request->hasFile('image') && $image != null) {
            $this->uploadImage($request, $image->id);
        }

        Session::flash('flash_message', 'Updated indiegogo page detail!');
        return redirect('admin/pages/indiegogo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteDetail($id)
    {
        $detail = PageMeta::findOrFail($id);
        $image = $detail->images()->first();
        $detail->delete();

        // remove old file
        if (!empty($image->value)) {
            $oldFilePath = public_path(config('constants.PAGE_FOLDER')) . '/' . $image->value;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        $image->delete();
        Session::flash('flash_message', 'Page detail deleted!');
        return redirect('admin/pages/indiegogo');
    }
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/
    /***************************************************************************/

//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\View\View
//     */
//    public function index(Request $request)
//    {
//        $perPage = config('constants.PAGE_SIZE');
//        $pages = (new Page)->newQuery()->orderBy('created_at','des');
//
//        $pages = $pages->paginate($perPage);
//
//        $total = Page::count();
//
//        return view('admin.pages.index', compact('pages', 'total'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\View\View
//     */
//    public function create()
//    {
//        return view('admin.pages.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param \Illuminate\Http\Request $request
//     *
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'banner_image' => 'required|image|max_mb:2',
//            'is_published' => 'required',
//        ]);
//
//        $requestData = $request->all();
//
//        //create shoe type
//        $page = Page::create($requestData);
//
//        //upload image
//        if ($request->hasFile('banner_image'))
//        {
//            $this->changeBanner($page->id, $request);
//        }
//
//        Session::flash('flash_message', 'Created Banner For Page!');
//
//        return redirect('admin/page-banner');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int $id
//     *
//     * @return \Illuminate\View\View
//     */
//    public function show($id)
//    {
//        $page = Page::findOrFail($id);
//
//        return view('admin.pages.show', compact('page'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int $id
//     *
//     * @return \Illuminate\View\View
//     */
//    public function edit($id)
//    {
//        $page = Page::findOrFail($id);
//
//        return view('admin.pages.edit', compact('page'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  int $id
//     * @param \Illuminate\Http\Request $request
//     *
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function update($id, Request $request)
//    {
//        $this->validate($request, [
//            'is_published' => 'required',
//            'banner_image' => 'image|max_mb:2',
//        ]);
//
//        $requestData = $request->all();
//
//        $page = Page::findOrFail($id);
//
//        $page->update($requestData);
//
//        //upload image
//        if ($request->hasFile('banner_image')) {
//            $this->changeBanner($page->id, $request);
//        }
//
//        Session::flash('flash_message', 'Updated Banner For Page!');
//
//        return redirect('admin/page-banner');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int $id
//     *
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function destroy($id)
//    {
//        $page = Page::findOrFail($id);
//
//        // remove old file
//        if (!empty($page->banner_image)) {
//            $oldFilePath = public_path(config('constants.BANNER_FOLDER')) . '/' . $page->banner_image;
//            if (File::exists($oldFilePath)) {
//                unlink($oldFilePath);
//            }
//        }
//        Page::destroy($id);
//        Session::flash('flash_message', 'Deleted Page Banner!');
//        return redirect('admin/page-banner');
//    }


}