<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Order extends Model
{

    const STATUS = [
        'ORDERED' => 1,
        'MEASURED' => 2,
        'PRODUCED' => 3,
        'PACKED' => 4,
        'DELIVERED' => 5,
        'COMPLETED' => 6
    ];
    
    const STATUS_TEXT = [
        'ORDERED' => 'Ordered',
        'MEASURED' => 'Measured',
        'PRODUCED' => 'Produced',
        'PACKED' => 'Packed',
        'DELIVERED' => 'Delivered',
        'COMPLETED' => 'Completed'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
    protected $fillable = ['package_id', 'total_price', 'status', 'email', 'full_name', 'phone', 'is_mine', 'indiegogo_order_code', 'order_number', 'type_id', 'style_id', 'toe_shape_id', 'leather_id', 'outsole_id', 'decorate', 'description', 'owner_id', 'quantity', 'shoe_size_id', 'flagship_style_id', 'shipping_address', 'currency_code', 'exchange_rate'];



    public function user()
    {
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\ProductPackage', 'package_id');
    }
    
    public function orderBilling()
    {
        return $this->hasOne('App\Models\OrderBilling');
    }
    
    public function orderShipping()
    {
        return $this->hasOne('App\Models\OrderShipping');
    }
    
    public function orderItem()
    {
        return $this->hasMany('App\Models\orderItem');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ShoeTypes', 'type_id');
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

    public function statusText()
    {
        return $this->status ? Order::STATUS_TEXT[array_keys(Order::STATUS, $this->status)[0]] : '';
    }

    public static function createStatusMap()
    {
        $array = [];
        foreach (Order::STATUS as $key => $value) {
            $array[$value] = Order::STATUS_TEXT[$key];
        }
        return $array;
    }

    public function flagshipImageUrl()
    {
        if (!empty($this->decorate) && File::exists(public_path(config('constants.FLAGSHIP_IMAGES_FOLDER')) . '/' . $this->decorate)) {
            return url(config('constants.FLAGSHIP_IMAGES_FOLDER') . '/' . $this->decorate);
        }
        return url(config('constants.ORDER_FLAGSHIP_DEFAULT_IMG'));
    }

    public function measurement() {
        return $this->belongsTo('App\Models\Measurement', 'measurement_id');
    }
}
