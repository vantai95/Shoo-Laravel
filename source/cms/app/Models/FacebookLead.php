<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class FacebookLead extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facebook_leads';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['facebook_id', 'registered_date', 'email', 'full_name', 'phone_number'];

}
