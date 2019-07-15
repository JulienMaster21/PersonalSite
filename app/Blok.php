<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    /**
     * Get the courses for the bloks.
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    protected $attributes = [

    ];

    protected $table = "bloks";
}
