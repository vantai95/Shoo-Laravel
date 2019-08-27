<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class OrderItem extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_items';

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
    protected $fillable = ['order_id', 'type_id', 'style_id', 'shoe_size_id', 'quantity', 'unit_price', 'price_custom_fit', 'total_price', 'toe_shape_id', 'leather_id', 'outsole_id', 'flagship_style_id', 'description', 'description'];

    public function shoeSize()
    {
        return $this->belongsTo('App\Models\ShoeSize', 'shoe_size_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }    

    public function package()
    {
        return $this->belongsTo('App\Models\ProductPackage', 'package_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ShoeType', 'type_id');
    }


    public function style()
    {
        return $this->belongsTo('App\Models\ShoeStyles', 'style_id');
    }

    public function toeShape()
    {
        return $this->belongsTo('App\Models\ToeShape', 'toe_shape_id');
    }

    public function leather()
    {
        return $this->belongsTo('App\Models\Leather', 'leather_id');
    }

    public function outsole()
    {
        return $this->belongsTo('App\Models\OutsoleTypes', 'outsole_id');
    }

    public function flagshipStyle()
    {
        return $this->belongsTo('App\Models\FlagshipStyle', 'flagship_style_id');
    }

}
