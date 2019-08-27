<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class State extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';


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
    protected $fillable = ['country_id', 'name'];

    protected $hidden = [''];

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'state_id');
    }
    
    public function countries()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function canDelete()
    {
        if ($this->packages()->count() > 0) {
            return false;
        }
        return true;
    }


}
