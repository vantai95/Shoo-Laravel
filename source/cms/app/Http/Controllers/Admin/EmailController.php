<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Services\CommonService;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
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
        $total = EmailTemplate::count();
        $emails = EmailTemplate::orderBy('created_at', 'desc');
        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $emails = $emails->where(function ($query) use ($keyword) {
                $query->orWhere('name', 'LIKE', $keyword);
                $query->orWhere('subject', 'LIKE', $keyword);
            });
        }
        $emails = $emails->paginate($perPage);
        return view('admin.settings.emails.index', compact('emails', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
//    public function create(Request $request)
//    {
//        return view('admin.settings.emails.create');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
//    public function store(Request $request)
//    {
//        // validate input data
//        $this->validate($request, [
//            'name' => 'required|max:512|unique:email_templates',
//            'subject' => 'required|max:512',
//            'content' => 'required'
//        ]);
//
//            // update to database
//        $email = new EmailTemplate([
//            'name' => $request->get('name'),
//            'subject' => $request->get('subject'),
//            'content' => $request->get('content'),
//        ]);
//        $email->save();
//        return redirect('admin/settings/emails');
//    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $email = EmailTemplate::findOrFail($id);
        return view('admin.settings.emails.show', compact('email'));
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
        $email = EmailTemplate::findOrFail($id);
        return view('admin.settings.emails.edit', compact('email'));
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
        $this->validate($request, [
            'subject_en' => 'required|max:512',
            'content_en' => 'required',
            'subject_vi' => 'required|max:512',
            'content_vi' => 'required'
        ]);
        $email = EmailTemplate::findOrFail($id);
        $requestData = $request->all();
        $email->update($requestData);
        Session::flash('flash_message', "Email $email->name updated!");
        return redirect('admin/settings/emails');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
//    public function destroy($id)
//    {
//        $email = EmailTemplate::findOrFail($id);
//        EmailTemplate::destroy($id);
//        Session::flash('flash_message', "Email template $email->title deleted!");
//        return redirect('admin/settings/emails');
//    }

}
