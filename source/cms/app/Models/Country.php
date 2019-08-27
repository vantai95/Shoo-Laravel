<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Country extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';


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
    protected $fillable = ['country_code', 'name'];

    protected $hidden = [''];

    public function states()
    {
        return $this->hasMany('App\Models\State', 'country_id');
    }
    

    public function canDelete()
    {
        if ($this->packages()->count() > 0) {
            return false;
        }
        return true;
    }


}
