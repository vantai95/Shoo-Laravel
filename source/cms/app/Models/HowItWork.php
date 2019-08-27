<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Models\Page;

class HowItWork extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'how_it_works';

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
    protected $fillable = ['title_en', 'description_en', 'title_vi', 'description_vi', 'image', 'is_published', 'page_id'];

    public function imageUrl()
    {
        if (!empty($this->image) && File::exists(public_path(config('constants.HOW_IT_WORK_FOLDER')) . '/' . $this->image)) {
            return asset(config('constants.HOW_IT_WORK_FOLDER') . '/' . $this->image);
        }
        return url(config('constants.HOW_IT_WORK_DEFAULT_IMG'));
    }

    public function status()
    {
        return $this->is_published ? 'Published' : 'Unpublished';
    }


}
