<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Log;

class UserShipping extends Model
{

    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_shippings';

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
    protected $fillable = [	'user_id','phone_number','address','country_id','state_id','city_id','zipcode','note'];

    public function countries()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function states()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
