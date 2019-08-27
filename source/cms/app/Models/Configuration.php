<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Configuration extends Model
{
    const CONFIG_KEYS = [
        'HOME_VIDEO' => 'HOME_VIDEO',
        'INDIEGOGO' => 'INDIEGOGO',
        'INDIEGOGO_PAGE' => 'INDIEGOGO_PAGE',
        'E-COMMERCE' => 'E-COMMERCE',
        'CAMPAIGN_MENU_STATUS' => 'CAMPAIGN-MENU-STATUS',
        'CAMPAIGN_BUTTON_STATUS' => 'CAMPAIGN-BUTTON-STATUS',
        'CAMPAIGN_BUTTON_VALUE' => 'CAMPAIGN-BUTTON-VALUE'
    ];
    const CONFIG_VALUES = [
        'HOME_VIDEO' => 'https://www.youtube.com/embed/x4XRrGW7lxM',
        'INDIEGOGO' => 'https://shoex.net/donggiay4.0',
        'INDIEGOGO_PAGE' => 'https://shoex.net/donggiay4.0',
        'E-COMMERCE' => true,
        'CAMPAIGN_MENU_STATUS' => true,
        'CAMPAIGN_BUTTON_STATUS' => true,
        'CAMPAIGN_BUTTON_VALUE' => 'https://shoex.net/donggiay4.0',

    ];
    const TITLE = [
        'HOME_VIDEO' => 'We are in your shoes!',
        'INDIEGOGO' => 'Our Story',
        'INDIEGOGO_PAGE' => 'Our Story',
    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configurations';

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
    protected $fillable = ['config_key', 'config_value','is_published', 'title_en', 'title_vi'];

    public function status()
    {
        return $this->is_published ? 'Show' : 'Hide';
    }

}
