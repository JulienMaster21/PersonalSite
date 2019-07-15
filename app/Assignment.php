<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $attributes = [
        "name" => "",
        "url" => "",
        "description" => "",
    ];

    protected $fillable = [
        "name",
        "url",
        "description",
    ];

    protected $table = "assignments";
}
