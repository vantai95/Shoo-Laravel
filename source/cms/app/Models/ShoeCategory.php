<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ShoeCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shoe_categories';


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
    protected $fillable = ['name_en', 'name_vi'];

    protected $hidden = ['pivot'];

    public function packages()
    {
        return $this->hasMany('App\Models\ProductPackage', 'shoe_category_id');
    }

    public function shoeTypes()
    {
        return $this->belongsToMany('App\Models\ShoeTypes', 'shoe_types_shoe_categories', 'shoe_category_id', 'shoe_types_id');
    }

    public function shoeStyles()
    {
        return $this->belongsToMany('App\Models\ShoeStyles', 'shoe_styles_shoe_categories', 'shoe_category_id', 'shoe_style_id');
    }

    public function toeShapes()
    {
        return $this->belongsToMany('App\Models\ToeShape', 'toe_shapes_shoe_categories', 'shoe_category_id', 'toe_shape_id');
    }

    public function leather()
    {
        return $this->belongsToMany('App\Models\Leather', 'leather_shoe_categories', 'shoe_category_id', 'leather_id');
    }

    public function outsoleTypes()
    {
        return $this->belongsToMany('App\Models\OutsoleTypes', 'outsole_types_shoe_categories', 'shoe_category_id', 'outsole_type_id');
    }

    public function canDelete()
    {
        if ($this->packages()->count() > 0) {
            return false;
        }
        return true;
    }


}
