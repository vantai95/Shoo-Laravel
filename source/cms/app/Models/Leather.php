<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Leather extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leather';

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
    protected $fillable = ['name_vi', 'description_vi', 'color_vi','name_en', 'description_en', 'color_en', 'picture'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\ShoeCategory', 'leather_shoe_categories', 'leather_id', 'shoe_category_id');
    }


    public function imageUrl()
    {
        if (!empty($this->picture) && File::exists(public_path(config('constants.LEATHER_FOLDER')) . '/' . $this->picture)) {
            return url(config('constants.LEATHER_FOLDER') . '/' . $this->picture);
        }
        return url(config('constants.LEATHER_DEFAULT_IMG'));
    }

    /**
     * Make thumbnail from origin image
     * @return $thumbnail
     */
    public function thumbnailUrl()
    {
        return asset(CommonService::makeThumbnail(config('constants.LEATHER_FOLDER'), $this->picture, 'leather.png', $this->id));
    }

}
