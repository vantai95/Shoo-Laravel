<?php

namespace App\Http\Controllers\Admin;

use App\Models\HowItWork;
use App\Services\CommonService;
use App\Services\LogService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class HowItWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('q');
        $perPage = config('constants.PAGE_SIZE');
        $howItWorks = (new HowItWork)->newQuery()->orderBy('created_at', 'desc');
        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $howItWorks = $howItWorks->where(function ($query) use ($keyword) {
                $query->orWhere('title', 'LIKE', $keyword);
                $query->orWhere('description', 'LIKE', $keyword);
            });
        }
        $howItWorks = $howItWorks->paginate($perPage);
        $total = HowItWork::count();
        return view('admin.how_it_works.index', compact('howItWorks', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('admin.how_it_works.create');
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
        // validate input data
        $this->validate($request, [
            'title_en' => 'required|max:512',
            'description_en' => 'html_required',
            'title_vi' => 'required|max:512',
            'description_vi' => 'html_required',
            'is_published' => 'required',
            'image' => 'image|max_mb:2'
        ]);

        $requestData = $request->all();

        $howItWork = HowItWork::create($requestData);
        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($howItWork->id, $request);
        }
        
        Session::flash('flash_message', 'Created How It Work !');

        return redirect('admin/page-how-it-works');
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
        $howItWork = HowItWork::findOrFail($id);
        return view('admin.how_it_works.show', compact('howItWork'));
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
        $howItWork = HowItWork::findOrFail($id);
        return view('admin.how_it_works.edit', compact('howItWork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param Request $request
     *
     */
    public function update($id, Request $request)
    {
        $howItWork = HowItWork::findOrFail($id);
        $this->validate($request, [
            'title_en' => 'required|max:512',
            'description_en' => 'html_required',
            'title_vi' => 'required|max:512',
            'description_vi' => 'html_required',
            'is_published' => 'required',
            'image' => 'image|max_mb:2'
        ]);
        $requestData = $request->all();
        $howItWork->update($requestData);
        //upload image
        if($request->hasFile('image'))
        {
            $this->changeImage($howItWork->id, $request);
        }

        Session::flash('flash_message', 'How It Work Updated!');
//        return redirect(CommonService::getPreviousUrl($request));
        return redirect('admin/page-how-it-works');
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
        $howItWork = HowItWork::findOrFail($id);
        HowItWork::destroy($id);
        LogService::Log('Delete banner category: ' . $howItWork->title, null);
        Session::flash('flash_message', "Deleted $howItWork->title");
        return redirect('admin/page-how-it-works');
    }

    public function changeImage($id, Request $request)
    {
        $howItWork = HowItWork::findOrFail($id);
        // create new file$
        $photoName = time() . ".$howItWork->id." . $request->image->getClientOriginalExtension();
        $request->image->move(public_path(config('constants.HOW_IT_WORK_FOLDER')), $photoName);

        // remove old file
        if (!empty($howItWork->image)) {
            $oldFilePath = public_path(config('constants.HOW_IT_WORK_FOLDER')) . '/' . $howItWork->image;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $howItWork->image = $photoName;
        $howItWork->save();

        return redirect('admin/page-how-it-works/' . $id . '/edit');
    }

}
