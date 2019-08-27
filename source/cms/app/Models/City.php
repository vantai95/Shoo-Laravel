<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class City extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';


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
    protected $fillable = ['state_id', 'name'];

    protected $hidden = [''];
    
    public function states()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }

    public function canDelete()
    {
        if ($this->packages()->count() > 0) {
            return false;
        }
        return true;
    }


}
