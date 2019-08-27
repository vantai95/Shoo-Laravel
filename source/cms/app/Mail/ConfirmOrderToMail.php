<?php

namespace App\Mail;

use App\Models\Leather;
use App\Models\OutsoleTypes;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use App\Models\ToeShape;
use Illuminate\Http\Request;
use App\Models\ProductPackage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmOrderToMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $order;
    public $productPackage;
    public $downloadAppLink;
    public $openAppLink;
    public $fullName;
    public $shoeType;
    public $shoeStyle;
    public $toeShape;
    public $leatherColor;
    public $outsoleType;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, $order, $downloadAppLink, $openAppLink)
    {
        $this->request = $request;
        $this->order = $order;
        $this->productPackage = ProductPackage::where('id', $order->package_id)->first();
        $this->downloadAppLink = $downloadAppLink;
        $this->openAppLink = $openAppLink;

        $this->shoeType = ShoeTypes::where  ('id', '=', $request->shoeTypeS )->first();
        $this->shoeStyle = ShoeStyles::where('shoe_types_id', '=', $request->shoeTypeS)
            ->where('id', '=' , $request->shoeStyleS)->first();
        $this->toeShape = ToeShape::where('id', '=', $request->toeShapeS)->first();
        $this->leatherColor = Leather::where('id', '=', $request->leatherColorS)->first();
        $this->outsoleType = OutsoleTypes::where('id', '=', $request->outsoleTypeS)->first();
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
            return $this->from(env('MAIL_FROM_ADDRESS'),'Virtus')->subject('Thank for your order !')->view('emails.order.confirmOrder')
                ->bcc($bccEmails);
        };
        return $this->from(env('MAIL_FROM_ADDRESS'),'Virtus')->subject('Thank for your order !')->view('emails.order.confirmOrder');
    }

}
