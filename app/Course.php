<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
    * Get the bloks that owns the courses.
    */
    public function blok()
    {
        return $this->belongsTo('App\Blok');
    }

    /**
     * Get the test for the courses.
     */
    public function tests()
    {
        return $this->hasMany('App\Test');
    }

    protected $fillable = [
        "name",
        "blok_id",
    ];

    protected $table = "courses";
    public $timestamps = false;
}
