<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
    * Get the course that owns the test.
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
    public $timestamps = false;
}
