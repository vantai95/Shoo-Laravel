<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ShoeTypes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shoe_types';

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
    protected $fillable = ['name_en', 'description_en','name_vi', 'description_vi', 'image_url', 'index', 'description_home_en', 'description_shoe_types_en', 'description_home_vi', 'description_shoe_types_vi', 'slug'];

    protected $hidden = ['pivot'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\ShoeCategory', 'shoe_types_shoe_categories', 'shoe_types_id', 'shoe_category_id');
    }

    public function shoeStyles()
    {
        return $this->hasMany('App\Models\ShoeStyles', 'shoe_types_id');
    }

    public function imageUrl()
    {
        if (!empty($this->image_url) && File::exists(public_path(config('constants.SHOE_TYPE_FOLDER')) . '/' . $this->image_url)) {
            return url(config('constants.SHOE_TYPE_FOLDER') . '/' . $this->image_url);
        }
        return url(config('constants.DEFAULT_SHOE_TYPE_IMG'));

    }

    public function thumbnailUrl()
    {
        return asset(CommonService::makeThumbnail(config('constants.SHOE_TYPE_FOLDER'), $this->image_url, 'shoes.png', $this->id));
    }

    public function canDelete()
    {
        if ($this->shoeStyles()->count() > 0) {
            return false;
        }
        return true;
    }

}
