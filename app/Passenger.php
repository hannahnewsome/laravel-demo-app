<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
     public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'titanic';


}
