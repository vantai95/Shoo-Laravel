<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Size extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sizes';

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
    protected $fillable = ['value', 'type'];

    public function type()
    {
        return $this->type;
    }

    public function value()
    {
        return $this->value;
    }
}
