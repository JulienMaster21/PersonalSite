<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use \App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("courses")->insert([
            ["blok_id" => 1, "name" => "Computer Science Basics",           "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 1, "name" => "Opleidings- en Beroepsorientatie",  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 1, "name" => "Programming Basics",                "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 2, "name" => "Object-Oriented Programming",       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 2, "name" => "Professional Skills 1",             "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 2, "name" => "HZ-Personality 2a",                 "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 3, "name" => "Framework Development 1",           "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 3, "name" => "Framework Project 1",               "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 3, "name" => "Professional Skills 2",             "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 3, "name" => "Professionele Werkplek 1",          "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 4, "name" => "Framework Development 2",           "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 4, "name" => "Framework Project 2",               "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 4, "name" => "Professional Skills 3",             "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["blok_id" => 4, "name" => "IT Personality 2a",                 "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
