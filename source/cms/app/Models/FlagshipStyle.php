<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class FlagshipStyle extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flagship_styles';

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
    protected $fillable = ['name_en', 'name_vi', 'image_url', 'description_en', 'description_vi'];

    public function imageUrl()
    {
        if (!empty($this->image_url) && File::exists(public_path(config('constants.FLAGSHIP_STYLE_FOLDER')) . '/' . $this->image_url)) {
            return url(config('constants.FLAGSHIP_STYLE_FOLDER') . '/' . $this->image_url);
        }
        return url(config('constants.FLAGSHIP_STYLE_DEFAULT_IMG'));

    }

    /**
     * Make thumbnail from origin image
     * @return $thumbnail
     */
    public function thumbnailUrl()
    {
        return asset(CommonService::makeThumbnail(config('constants.FLAGSHIP_STYLE_FOLDER'), $this->image_url, 'flagship_style.jpg', $this->id));
    }


}
