<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class OutsoleTypes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'outsole_types';

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
    protected $fillable = ['name_en', 'description_en', 'name_vi', 'description_vi'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\ShoeCategory', 'outsole_types_shoe_categories', 'outsole_type_id', 'shoe_category_id');
    }


    public function imageUrl()
    {
        if (!empty($this->picture) && File::exists(public_path(config('constants.OUTSOLE_TYPE_FOLDER')) . '/' . $this->picture)) {
            return url(config('constants.OUTSOLE_TYPE_FOLDER') . '/' . $this->picture);
        }
        return url(config('constants.OUTSOLE_TYPE_DEFAULT_IMG'));
    }

    /**
     * Make thumbnail from origin image
     * @return $thumbnail
     */
    public function thumbnailUrl()
    {
        return asset(CommonService::makeThumbnail(config('constants.OUTSOLE_TYPE_FOLDER'), $this->picture, 'outsole_type.jpg', $this->id));
    }

}
