<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProductPackage extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_packages';

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
    protected $fillable = ['name_en','name_vi', 'price', 'volume', 'description_en', 'description_vi', 'available', 'shoe_category_id', 'image'];

    public function status()
    {
        if ($this->available) {
            return 'Stock in';
        }
        return 'Stock out';
    }

    public function category()
    {
        return $this->belongsTo('App\Models\ShoeCategory', 'shoe_category_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'package_id');
    }

    public function canDelete()
    {
        return !$this->orders()->count() > 0;
    }

    public function preOrder()
    {
        return $this->hasMany(PreOrder::class, 'package_id');
    }

    public function imageUrl()
    {
        if (!empty($this->image) && File::exists(public_path(config('constants.PRODUCT_PACKAGE_FOLDER')) . '/' . $this->image)) {
            return url(config('constants.PRODUCT_PACKAGE_FOLDER') . '/' . $this->image);
        }
        return url(config('constants.PRODUCTION_PACKAGE_DEFAULT_IMG'));
    }

}
