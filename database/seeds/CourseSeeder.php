<?php

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
        // factory(Course::class, 20)->create();
        DB::table("courses")->insert([
            ["blok_id" => 1, "name" => "Computer Science Basics"],
            ["blok_id" => 1, "name" => "Opleidings- en Beroepsorientatie"],
            ["blok_id" => 1, "name" => "Programming Basics"],
            ["blok_id" => 2, "name" => "Object-Oriented Programming"],
            ["blok_id" => 2, "name" => "Professional Skills 1"],
            ["blok_id" => 2, "name" => "HZ-Personality 2a"],
            ["blok_id" => 3, "name" => "Framework Development 1"],
            ["blok_id" => 3, "name" => "Framework Project 1"],
            ["blok_id" => 3, "name" => "Professional Skills 2"],
            ["blok_id" => 3, "name" => "Professionele Werkplek 1"],
            ["blok_id" => 4, "name" => "Framework Development 2"],
            ["blok_id" => 4, "name" => "Framework Project 2"],
            ["blok_id" => 4, "name" => "Professional Skills 3"],
            ["blok_id" => 4, "name" => "IT Personality 2a"],
        ]);
    }
}
