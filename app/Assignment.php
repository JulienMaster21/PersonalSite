<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $attributes = [
        "project_name" => "",
        "image_url" => "",
        "description" => "",
    ];
    public $timestamps = false;
    protected $table = "assignments";
}
