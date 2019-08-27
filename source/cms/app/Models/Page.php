<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Models\HowItWork;

class Page extends Model
{
    const CONSTANTS = [
        'INDIEGOGO' => 'INDIEGOGO',
        'DELIVERY_INFORMATION' => 'DELIVERY_INFORMATION',
        'PRIVACY_POLICY' => 'PRIVACY_POLICY',
        'TERM_AND_CONDITION' => 'TERM_AND_CONDITION'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

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
    protected $fillable = ['video', 'page_name_en', 'page_name_vi', 'is_published' , 'slug'];

    public function meta()
    {
        return $this->hasMany('App\Models\PageMeta', 'page_id');
    }
}
