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
            ["bloks_id" => 1, "name" => "Computer Science Basics"],
            ["bloks_id" => 1, "name" => "Opleidings- en Beroepsorientatie"],
            ["bloks_id" => 1, "name" => "Programming Basics"],
            ["bloks_id" => 2, "name" => "Object-Oriented Programming"],
            ["bloks_id" => 2, "name" => "Professional Skills 1"],
            ["bloks_id" => 2, "name" => "HZ-Personality 2a"],
            ["bloks_id" => 3, "name" => "Framework Development 1"],
            ["bloks_id" => 3, "name" => "Framework Project 1"],
            ["bloks_id" => 3, "name" => "Professional Skills 2"],
            ["bloks_id" => 3, "name" => "Professionele Werkplek 1"],
            ["bloks_id" => 4, "name" => "Framework Development 2"],
            ["bloks_id" => 4, "name" => "Framework Project 2"],
            ["bloks_id" => 4, "name" => "Professional Skills 3"],
            ["bloks_id" => 4, "name" => "IT Personality 2a"],
        ]);
    }
}
