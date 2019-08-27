<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;

class EmailTemplate extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'email_templates';

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
    protected $fillable = ['subject_en', 'content_en', 'subject_vi', 'content_vi'];


    public function parse($data)
    {
        $parsed = preg_replace_callback('/{{(.*?)}}/', function ($matches) use ($data) {
            list($shortCode, $index) = $matches;

            if( isset($data[$index]) ) {
                return $data[$index];
            } else {
                throw new Exception("Shortcode {$shortCode} not found in template id {$this->id}", 1);   
            }

        }, $this->content);

        return $parsed;
    }

}
