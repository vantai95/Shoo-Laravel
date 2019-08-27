<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsDescription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'about_us_description';

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
    protected $fillable = ['description_en','sub_description_en','description_vi','sub_description_vi'];

}
