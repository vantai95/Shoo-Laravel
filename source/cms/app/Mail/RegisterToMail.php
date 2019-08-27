<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Log;
use Session;

class RegisterToMail extends Mailable
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
    public function __construct($data, $verify_url)
    {
        
        $language = Session::get('lang');
        $this->data = $data;
        $this->verify_url = $verify_url;
        $this->template = 'emails.template';  
        $email = EmailTemplate::where('name', 'auth.register')->select('email_templates.*', "subject_$language as subject", "content_$language as content")->firstOrFail();
        $this->subject($email->subject);  
        $this->params = ['content' =>$email->parse([
                                                    'full_name' =>  $this->data->full_name,
                                                    'email' =>  $this->data->email,
                                                    'verify_url' =>  $verify_url,
                                                    'reason' => '',
                                                    'app_name' => config('app.name'),
                                                    'CS_PHONE' => env('CS_PHONE'),
                                                    'CS_EMAIL' => env('CS_EMAIL')
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
