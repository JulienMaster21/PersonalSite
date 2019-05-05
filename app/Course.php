<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
    * Get the blok that owns the course.
    */
    public function blok()
    {
        return $this->belongsTo('App\Blok');
    }

    /**
     * Get the tests for the course.
     */
    public function tests()
    {
        return $this->hasMany('App\Test');
    }

    protected $attributes = [
        "name" => "",
        "blok_id" => -1,
    ];

    protected $table = "courses";
    public $timestamps = false;
}
