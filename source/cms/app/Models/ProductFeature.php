<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProductFeature extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_feature';

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
    protected $fillable = ['image', 'title_en', 'description_en', 'title_vi', 'description_vi', 'is_published', 'index'];

    public function imageProductFeatureURL()
    {
        if (!empty($this->image) && File::exists(public_path(config('constants.PRODUCT_FEATURE_IMG_FOLDER')) . '/' . $this->image)) {
            return asset(config('constants.PRODUCT_FEATURE_IMG_FOLDER') . '/' . $this->image);
        }

        return url(config('constants.PRODUCT_FEATURE_DEFAULT_IMG'));
    }

    public function productFeatureDetails()
    {
        return $this->hasMany(ProductFeatureDetail::class, 'product_feature');
    }

    public function status()
    {
        if ($this->is_published) {
            return 'Show';
        }
        return 'Hide';
    }
}
