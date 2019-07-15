<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
    * Get the courses that owns the tests.
    */
    public function course() {
        return $this->belongsTo('App\Course');
    }

    protected $fillable = [
        "name",
        "completed",
        "grade",
        "EC",
        "course_id"
    ];

    protected $table = "tests";
}
