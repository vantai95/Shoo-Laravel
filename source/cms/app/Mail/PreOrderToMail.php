<?php

namespace App\Mail;

use Illuminate\Http\Request;
use App\Models\ProductPackage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PreOrderToMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $productPackage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->productPackage = ProductPackage::where('id', $request->id)->first();
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $bccEmails = explode(",", env('BCC_EMAILS'));
        if (count($bccEmails) > 0) {
            return $this->from(env('MAIL_FROM_ADDRESS'),'Virtus')->subject('Confirmed! You are a part of the footwear revolution.')->view('emails.order.preOrder')->bcc($bccEmails);
        };
        return $this->from(env('MAIL_FROM_ADDRESS'),'Virtus')->subject('Confirmed! You are a part of the footwear revolution.')->view('emails.order.preOrder');
    }

}
