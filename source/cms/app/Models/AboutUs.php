<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class AboutUs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'about_us';

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
    protected $fillable = ['image', 'is_banner'];

    public function imageUrl()
    {
        if ($this->is_banner) {
            if (!empty($this->image) && File::exists(public_path(config('constants.ABOUT_US_FOLDER')) . '/' . $this->image)) {
                return url(config('constants.ABOUT_US_FOLDER') . '/' . $this->image);
            }
            return url(config('constants.ABOUT_US_DEFAULT_IMG'));

        }else{
            if (!empty($this->image) && File::exists(public_path(config('constants.ABOUT_US_FOLDER')) . '/' . $this->image)) {
                return url(config('constants.ABOUT_US_FOLDER') . '/' . $this->image);
            }
            return url(config('constants.ABOUT_US_DEFAULT_IMG'));
        }
    }
}
