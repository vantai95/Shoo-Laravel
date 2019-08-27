<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\Measurement;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ProductPackage;
use App\Mail\SimpleEmailSender;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Boolean;
use Swift_TransportException;


class Orders1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = config('constants.PAGE_SIZE');

        $orders = Order::orderBy('created_at', 'desc');

        $orders = $orders->paginate($perPage);

        $total = Order::count();

        return view('admin.orders.index', compact('orders', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.orders.create');
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
            'package_id' => 'required',
            'indiegogo_order_code' => 'required|unique:orders',
            'email' => 'required|email',
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'shipping_address' => 'required',
        ]);

        $requestData = $request->all();

        $requestData['order_number'] = strtoupper(str_random(5));

        while (Order::where('order_number', $requestData['order_number'])->count() > 0) {
            $requestData['order_number'] = strtoupper(str_random(5));
        }

        $requestData['status'] = Order::STATUS['NEW'];

        $requestData['owner_id'] = Auth::user()->id;

        $requestData['quantity'] = 1;

        $requestData['total_price'] = ProductPackage::where('id', $requestData['package_id'])->first()->price;

        $order = Order::create($requestData);
        //send mail
        try {
            $toEmail = $requestData['email'];
            $email = EmailTemplate::where('name', 'order.order')->firstOrFail();
            $email->content = $email->parse([
                'full_name' => $requestData['full_name'],
                'url' => url('/order') . '/' . encrypt($requestData['order_number']),
                'reason' => '',
                'app_name' => config('app.name'),
                'CS_PHONE' => '',
                'CS_EMAIL' => ''
            ]);
            Mail::to($toEmail)->send(new SimpleEmailSender($email->subject, 'emails.template', ['content' => $email->content], null));
            Session::flash('flash_message', 'Created A Order!');
        } catch (Swift_TransportException $transportException) {
            $order->delete();
            Session::flash('flash_error', 'Error: Connection could not be established with host ' . env('MAIL_HOST') . '. ORDER ROLLED BACK!');
        }
        return redirect('admin/orders');
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
        $order = Order::findOrFail($id);

        return view('admin.orders.show', compact('order'));
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
        $order = Order::findOrFail($id);

        $categoryId = $order->package->category->id;

        return view('admin.orders.edit', compact('order', 'categoryId'));
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
            'status' => 'required',
        ]);

        $requestData = $request->all();
        $order = Order::findOrFail($id);
        if ($requestData['status'] == Order::STATUS['FEEDBACK']) {
            $requestData['status'] = Order::STATUS['NEW'];

            try {
                $this->validate($request,[
                   'feedback_message' => 'required'
                ]);
                // send feedback email to user
                $toEmail = $order->email;
                $email = EmailTemplate::where('name_en', 'order.feedback')->firstOrFail();
                $email->content = $email->parse([
                    'full_name' => $order->full_name,
                    'url' => url('/order') . '/' . encrypt($order->order_number),
                    'feedback_message' => $requestData['feedback_message'],
                    'reason' => '',
                    'app_name' => config('app.name'),
                    'CS_PHONE' => '',
                    'CS_EMAIL' => ''
                ]);
                Mail::to($toEmail)->send(new SimpleEmailSender($email->subject, 'emails.template', ['content' => $email->content], null));
                // update databaase
                $order->update($requestData);
                Session::flash('flash_message', 'Order updated status to ' . Order::STATUS['NEW'] . ' and emailed to user!');
            } catch (Swift_TransportException $transportException) {
                Session::flash('flash_error', "Error: Connection could not be established with host " . env('MAIL_HOST') . 'Order rolled back!');
            }
        }

        $order->update($requestData);

        Session::flash('flash_message', 'Updated Orders!');

        return redirect('admin/orders');
    }
}
