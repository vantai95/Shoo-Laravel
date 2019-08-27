<?php

namespace App\Models;

use Exception;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;
use Illuminate\Notifications\Notifiable;
use App\Mail\SimpleEmailSender;
use Illuminate\Support\Facades\Mail;
use Log;
use Session;

class User extends Authenticatable
{
    const STATUS_TEXT = [
        'ACTIVE' => 'Active Account',
        'LOCKED' => 'Blocked Account'
    ];

    const LOGIN_TYPE = [
        'NORMAL' => 'NORMAL',
        'FACEBOOK' => 'FACEBOOK',
        'GOOGLE_PLUS' => 'GOOGLE_PLUS',
        'UNKNOWN' => 'UNKNOWN'
    ];

    use Notifiable;
    protected $table = 'users';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'full_name', 'email', 'phone', 'password', 'birth_day', 'address', 'image_1',
        'is_locked', 'fb_uid', 'google_uid', 'has_password', 'email_verified','email_verify_sent_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return !empty($this->role_id);
    }

    /**
     * Get the role of user.
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function roleName()
    {
        return !empty($this->role) ? $this->role->name : 'User';
    }

    public function imageUrl()
    {
        if (!empty($this->image_1) && File::exists(public_path(config('constants.AVATAR_PROFILE_FOLDER')) . '/' . $this->image_1)) {
            return asset(config('constants.AVATAR_PROFILE_FOLDER') . '/' . $this->image_1);
        }

        $facebook = $this->facebookImage();
        if (!empty($facebook)) {
            return $facebook;
        }

        $googlePlus = $this->googlePlusImage();
        if (!empty($googlePlus)) {
            return $googlePlus;
        }

        return url(config('constants.AVATAR_PROFILE_DEFAULT_IMG'));
    }

    public function imageFullUrl()
    {
        if (!empty($this->image_1) && File::exists(public_path(config('constants.AVATAR_PROFILE_FOLDER')) . '/' . $this->image_1)) {
            return url(config('constants.AVATAR_PROFILE_FOLDER') . '/' . $this->image_1);
        }

        $facebook = $this->facebookImage();
        if (!empty($facebook)) {
            return $facebook;
        }

        $googlePlus = $this->googlePlusImage();
        if (!empty($googlePlus)) {
            return $googlePlus;
        }

        return url('images/profile.jpg');
    }

    public function facebookImage()
    {
        if (!empty($this->fb_uid)) {
            return "http://graph.facebook.com/" . $this->fb_uid . "/picture?type=square";
        }

        return null;
    }

    public function googlePlusImage()
    {
        if (!empty($this->google_uid)) {
            try {
                $content = @file_get_contents("http://picasaweb.google.com/data/entry/api/user/" . $this->google_uid . "?alt=json");
                if (strpos($http_response_header[0], "200")) {
                    $d = json_decode($content);
                    return $d->{'entry'}->{'gphoto$thumbnail'}->{'$t'};
                }
            } catch (Exception $ex) {
            }
        }

        return null;
    }

    /**
     * Status text of user.
     *
     * @return mixed
     */
    public function status()
    {
        return $this->is_locked ? User::STATUS_TEXT['LOCKED'] : User::STATUS_TEXT['ACTIVE'];
    }

    public function loginType()
    {
        $typeText = null;
        if ($this->has_password) {
            $typeText = User::LOGIN_TYPE['NORMAL'];
        }

        if (!empty($this->fb_uid)) {
            if (empty($typeText)) {
                $typeText = User::LOGIN_TYPE['FACEBOOK'];
            } else {
                $typeText .= ', ' . User::LOGIN_TYPE['FACEBOOK'];
            }
        }

        if (!empty($this->google_uid)) {
            if (empty($typeText)) {
                $typeText = User::LOGIN_TYPE['GOOGLE_PLUS'];
            } else {
                $typeText .= ', ' . User::LOGIN_TYPE['GOOGLE_PLUS'];
            }
        }

        if (empty($typeText)) {
            return User::LOGIN_TYPE['UNKNOWN'];
        }

        return $typeText;
    }

    public function disableRole()
    {
        if (empty($this->email)) {
            return false;
        }
        return true;
    }

    /**
     * Find the user identified by the given $identifier.
     *
     * @param $identifier email|phone
     * @return mixed
     */
    public function findForPassport($identifier)
    {
        return $this->where('is_locked', false)
            ->where(function ($query) use ($identifier) {
                $query->orWhere('email', $identifier);
                $query->orWhere('phone', $identifier);
            })->first();
    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        
        $language = Session::get('lang');
        $reset_password_url = url(route('password.reset', $token, false));
        // send feedback email to user
        $email = EmailTemplate::where('name', 'auth.ForgotPassword')->select('email_templates.*', "subject_$language as subject", "content_$language as content")->firstOrFail();
        $email->content = $email->parse([
            'reset_password_url' => $reset_password_url,
            'full_name' => $this->full_name,
            'reason' => '',
            'app_name' => config('app.name'),
            'CS_PHONE' => env('CS_PHONE'),
            'CS_EMAIL' => env('CS_EMAIL')
        ]);
        Mail::to($this)->send(new SimpleEmailSender($email->subject, 'emails.template', ['content' => $email->content], null));
    }

    public function isLocked()
    {

        return $this->is_locked;

    }
}
