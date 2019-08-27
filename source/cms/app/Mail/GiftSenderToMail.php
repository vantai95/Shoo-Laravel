<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Log;
use Session;

class GiftSenderToMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $verify_url;
    protected $template;
    protected $attachFiles;
    public $params;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        
        $language = Session::get('lang');
        $this->data = $data;
        $this->template = 'emails.template';  
        $email = EmailTemplate::where('name', 'order.giftsender')->select('email_templates.*', "subject_$language as subject", "content_$language as content")->firstOrFail();
        $this->subject($email->subject);  
        $this->params = ['content' =>$email->parse([
                                                    'sender_name' =>  $this->data['sender_name'],
                                                    'friend_name' =>  $this->data['friend_name'],
                                                    'friend_email' =>  $this->data['friend_email'],
                                                    'shipping_info' => $this->data['shipping_info'],
                                                    'order_detail_url'=>$this->data['order_detail_url'],
                                                    'apple_store_url' =>config('constants.APP_STORE_URL'),
                                                    'google_store_url'=>config('constants.GOOGLE_STORE_URL'),                                                    
                                                    'reason' => '',
                                                    'app_name' => config('app.name'),
                                                    'CS_PHONE' => config('constants.CS_PHONE'),
                                                    'CS_EMAIL' => config('constants.CS_EMAIL')
                                                ])];
        $this->attachFiles = null;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {            
        $email = $this->view($this->template);
        if ($this->attachFiles) {
            foreach ($this->attachFiles as $filePath) {
                $email->attach($filePath);
            }
        }
        return $email;

    }
}
