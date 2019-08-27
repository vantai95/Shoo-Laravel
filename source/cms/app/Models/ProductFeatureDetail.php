<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProductFeatureDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_feature_details';

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
    protected $fillable = ['title_en', 'title_vi', 'slug', 'content_en', 'content_vi', 'owner', 'product_feature', 'views', 'is_published'];

    public function status()
    {
        return $this->is_published ? 'Published' : 'Unpublished';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function productFeature()
    {
        return $this->belongsTo(ProductFeature::class, 'product_feature');
    }

    /**
     * Get Image Url
     *
     * @return string
     */
    public function imageUrl()
    {
        if (!empty($this->image) && File::exists(public_path(config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER')) . '/' . $this->image)) {
            return asset(config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER') . '/' . $this->image);
        }
        return url(config('constants.PRODUCT_FEATURE_DETAILS_DEFAULT_IMG'));
    }

}
