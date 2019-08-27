<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Log;
use Session;

class SendProfileAPIToMail extends Mailable
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
    public function __construct($user, $data)
    {        
        $language = Session::get('lang');
        $this->data = $data;
        $this->template = 'emails.template';  
        $email = EmailTemplate::where('name', 'measurement.info')->select('email_templates.*', "subject_$language as subject", "content_$language as content")->firstOrFail();
      
        $this->subject($email->subject);
        $full_name = $user->full_name;
        if(empty($full_name))
        {
            $full_name = $user->email;
        }  
        $this->params = ['content' =>$email->parse([
                                                    'full_name' =>  $full_name,
                                                    'email' =>  $user->email,
                                                    'left_foot_length' => $data['left_foot_length'],
                                                    'left_toes_girth' => $data['left_toes_girth'],
                                                    'left_ball_girth' => $data['left_ball_girth'],
                                                    'left_ball_width' => $data['left_ball_width'],
                                                    'left_instep_height' => $data['left_instep_height'],
                                                    'right_foot_length' => $data['right_foot_length'],
                                                    'right_toes_girth' => $data['right_toes_girth'],
                                                    'right_ball_girth' => $data['right_ball_girth'],
                                                    'right_ball_width' => $data['right_ball_width'],
                                                    'right_instep_height' => $data['right_instep_height'],
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
