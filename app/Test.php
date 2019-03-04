<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $attributes = [
        "blok" => -1,
        "cursus" => "",
        "subject" => "",
        "completed" => false,
        "grade" => -1,
        "EC" => -1
    ];
    public $timestamps = false;
    protected $table = "tests";
}
