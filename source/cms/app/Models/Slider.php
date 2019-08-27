<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Slider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slider';

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
    protected $fillable = ['image', 'title_en', 'description_en', 'title_vi', 'description_vi', 'is_published'];

    public function sliderUrl()
    {
        if (!empty($this->image) && File::exists(public_path(config('constants.SLIDER_FOLDER')) . '/' . $this->image)) {
            return asset(config('constants.SLIDER_FOLDER') . '/' . $this->image);
        }

        return url(config('constants.SLIDER_DEFAULT_IMG'));
    }

    public function status()
    {
        return $this->is_published ? 'Show' : 'Hide';
    }

}
