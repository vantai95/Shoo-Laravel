<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class PageMeta extends Model
{
    const CONSTANTS = [
        'TITLE' => 'TITLE',
        'VIDEO' => 'VIDEO',
        'DETAIL' => 'DETAIL',
        'IMAGE' => 'IMAGE',
        'DESCRIPTION' => 'DESCRIPTION',
        'RATINGS' => 'RATINGS',
        'FACEBOOK' => 'FACEBOOK',
        'YOUTUBE' => 'YOUTUBE'
    ];


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages_meta';

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
    protected $fillable = ['page_id', 'key', 'value_en', 'value_vi', 'available'];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id')->where('available', true);
    }

    public function images()
    {
        return $this->hasMany(PageMeta::class, 'page_id')->where('available', true);
    }

    public function status()
    {
        return $this->available ? "Available" : "Unavailable";
    }

    /**
     * Make thumbnail from origin image
     * @return $thumbnail
     */
    public function thumbnailUrl()
    {
        return asset(
            CommonService::makeThumbnail(
                config('constants.PAGE_FOLDER'),
                $this->value,
                'banner-17.png',
                $this->id
            )
        );
    }

    public function imageUrl()
    {
        if (!empty($this->value) && File::exists(public_path(config('constants.PAGE_FOLDER')) . '/' . $this->value)) {
            return asset(config('constants.PAGE_FOLDER') . '/' . $this->value);
        }
        return url(config('constants.PAGE_DEFAULT_IMG'));
    }
}
