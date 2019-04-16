<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    /**
     * Get the courses for the blok.
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    protected $attributes = [
        "id" => -1,
    ];
    protected $table = "bloks";
    public $timestamps = false;
}
