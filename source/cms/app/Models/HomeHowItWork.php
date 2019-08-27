<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class HomeHowItWork extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home_how_it_works';

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
    protected $fillable = ['title_en', 'description_en', 'title_vi', 'description_vi', 'image_url', 'is_published',];

    public function imageUrl()
    {
        if (!empty($this->image_url) && File::exists(public_path(config('constants.HOME_HOW_IT_WORK_FOLDER')) . '/' . $this->image_url)) {
            return asset(config('constants.HOME_HOW_IT_WORK_FOLDER') . '/' . $this->image_url);
        }
        return url(config('constants.HOME_HOW_IT_WORK_DEFAULT_IMG'));
    }

    public function status()
    {
        return $this->is_published ? 'Published' : 'Unpublished';
    }

}
