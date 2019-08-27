<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Log;

class UserAddition extends Model
{

    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_additions';

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
    protected $fillable = [	'user_id','country_id','size_id','shoe_width','note'];

    public function countries()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
