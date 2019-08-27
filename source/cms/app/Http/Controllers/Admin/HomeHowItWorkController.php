<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeHowItWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Services\CommonService;

class HomeHowItWorkController extends Controller
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
        $homeHowItWorks = (new HomeHowItWork)->newQuery()->orderBy('created_at', 'desc');


        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $homeHowItWorks = $homeHowItWorks->where(function ($query) use ($keyword) {
                $query->orWhere('title', 'LIKE', $keyword);
                $query->orWhere('description', 'LIKE', $keyword);
            });
        }

        $homeHowItWorks = $homeHowItWorks->paginate($perPage);

        $total = HomeHowItWork::count();

        return view('admin.home_how_it_works.index', compact('homeHowItWorks', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.home_how_it_works.create');
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
            'title_en' => 'required|max:50',
            'description_en' => 'html_required|max:100',            
            'title_vi' => 'required|max:50',
            'description_vi' => 'html_required|max:100',
            'is_published' => 'required',
            'image_url' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        $homeHowItWork = HomeHowItWork::create($requestData);

        //upload image
        if ($request->hasFile('image_url')) {
            $this->changeImage($homeHowItWork->id, $request);
        }

        Session::flash('flash_message', 'Created How It Work!');

        return redirect('admin/home-how-it-works');
    }

    public function changeImage($id, Request $request)
    {
        $homeHowItWork = HomeHowItWork::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $homeHowItWork->id . '.' . $request->image_url->getClientOriginalExtension();
        $request->image_url->move(public_path(config('constants.HOME_HOW_IT_WORK_FOLDER')), $photoName);

        // remove old file
        if (!empty($homeHowItWork->image_url)) {
            $oldFilePath = public_path(config('constants.HOME_HOW_IT_WORK_FOLDER')) . '/' . $homeHowItWork->image_url;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update shoe type image
        $homeHowItWork->image_url = $photoName;
        $homeHowItWork->save();

        return redirect('admin/home-how-it-works/' . $id . '/edit');
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
        $homeHowItWork = HomeHowItWork::findOrFail($id);

        return view('admin.home_how_it_works.show', compact('homeHowItWork'));
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
        $homeHowItWork = HomeHowItWork::findOrFail($id);

        return view('admin.home_how_it_works.edit', compact('homeHowItWork'));
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
            'title_en' => 'required|max:50',
            'description_en' => 'html_required|max:100',            
            'title_vi' => 'required|max:50',
            'description_vi' => 'html_required|max:100',
            'is_published' => 'required',
            'image_url' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        $homeHowItWork = HomeHowItWork::findOrFail($id);

        $homeHowItWork->update($requestData);

        //upload image
        if ($request->hasFile('image_url')) {
            $this->changeImage($homeHowItWork->id, $request);
        }


        Session::flash('flash_message', 'Updated How It Work!');

        return redirect('admin/home-how-it-works');
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
        $howItWork = HomeHowItWork::findOrFail($id);
        HomeHowItWork::destroy($id);
        Session::flash('flash_message', "Deleted How It Work $howItWork->title!");
        return redirect('admin/home-how-it-works');
    }
}
