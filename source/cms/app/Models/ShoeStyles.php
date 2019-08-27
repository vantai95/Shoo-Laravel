<?php

namespace App\Models;

use App\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Log;

class ShoeStyles extends Model
{

    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shoe_styles';

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
    protected $fillable = [	'shoe_types_id','main_name_en','sub_name_en','description_en','sub_description_en','main_name_vi','sub_name_vi','description_vi','sub_description_vi','image_url','price', 'discount_price', 'extra_en', 'extra_vi', 'slug'];

    public function shoeTypes()
    {
        return $this->belongsTo('App\Models\ShoeTypes', 'shoe_types_id');
    }

    public function imageUrl()
    {        
        $images = json_decode($this->images);
        if (!empty($images)){
            $firstImage = $images[0];
            if($firstImage!="" && File::exists(public_path(config('constants.SHOE_STYLES_FOLDER')) . '/' . $firstImage)) {
                return url(config('constants.SHOE_STYLES_FOLDER') . '/' . $firstImage);
            }else{
                return url(config('constants.DEFAULT_SHOE_STYLE_IMG'));
            }
        }
        return url(config('constants.DEFAULT_SHOE_STYLE_IMG'));
    }

    public function thumbnailUrl()
    {
        $images = json_decode($this->images);
        if (!empty($images)){
            $firstImage = $images[0];
            return asset(CommonService::makeThumbnail(config('constants.SHOE_STYLES_FOLDER'), $firstImage, 'shoe_style.jpg', $firstImage));
        }
        return asset(CommonService::makeThumbnail(config('constants.SHOE_STYLES_FOLDER'), $this->image_url, 'shoe_style.jpg', $this->id));
    }

    public function images(){
        $images = preg_replace('/[^A-Za-z0-9\-\,\.]/', '', $this->images);
        $images = explode( ',', $images );
        foreach ($images as &$image) {
            if($image)
                $image = url(config('constants.SHOE_STYLES_FOLDER') . '/' . $image);
            else $image = url(config('constants.DEFAULT_SHOE_STYLE_IMG'));
        }
        return $images;
    }

}
