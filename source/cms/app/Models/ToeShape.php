<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ToeShape extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'toe_shapes';

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
    protected $fillable = ['name_en', 'description_en', 'name_vi', 'description_vi', 'picture'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\ShoeCategory', 'toe_shapes_shoe_categories', 'toe_shape_id', 'shoe_category_id');
    }


    public function imageUrl()
    {
        if (!empty($this->picture) && File::exists(public_path(config('constants.TOE_SHAPE_FOLDER')) . '/' . $this->picture)) {
            return url(config('constants.TOE_SHAPE_FOLDER') . '/' . $this->picture);
        }
        return url(config('constants.TOE_SHAPE_DEFAULT_IMG'));
    }

    /**
     * Make thumbnail from origin image
     * @return $thumbnail
     */
    public function thumbnailUrl()
    {
        return asset(CommonService::makeThumbnail(config('constants.TOE_SHAPE_FOLDER'), $this->picture, 'toe_shape.jpg', $this->id));
    }

}
