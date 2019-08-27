<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class OrderShipping extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_shippings';

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
    protected $fillable = ['order_id', 'address', 'country_id', 'state_id', 'city_id', 'zipcode', 'note', 'full_name','email', 'phone_number'];
   
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }   
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    } 
    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    } 
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    } 
}
