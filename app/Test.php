<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
    * Get the course that owns the test.
    */
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    protected $attributes = [
        "name" => "",
        "completed" => false,
        "grade" => -1,
        "EC" => -1
    ];
    protected $table = "tests";
    public $timestamps = false;
}
