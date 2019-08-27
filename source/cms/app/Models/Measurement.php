<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Models\HowItWork;

class Measurement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'measurements';

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
    protected $fillable = ['user_id', 'email', 'height', 'height_unit', 'weight', 'weight_unit',
        'race', 'gender', 'date_of_birth', 'left_foot_length',
        'left_toes_girth', 'left_ball_girth', 'left_ball_width', 'left_instep_height',
        'right_foot_length', 'right_toes_girth', 'right_ball_girth', 'right_ball_width',
        'right_instep_height', 'code', 'platform'];

}
