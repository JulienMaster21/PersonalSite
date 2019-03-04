<?php

use Illuminate\Database\Seeder;
use \App\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(\App\Test::class, 20)->create();*/
        DB::table("tests")->insert([
            ["blok" => 1,   "cursus" => "Computer Science Basics",          "subject" => "Theorietentamen",         "completed" => true,    "grade" => 7.9,     "EC" => 7.5],
            ["blok" => 1,   "cursus" => "Opleidings- en Beroepsorientatie", "subject" => "Toets 1",                 "completed" => true,    "grade" => 6.0,     "EC" => 2.5],
            ["blok" => 1,   "cursus" => "Programming Basics",               "subject" => "Casustoets",              "completed" => true,    "grade" => 8.0,     "EC" => 5.0],
            ["blok" => 2,   "cursus" => "Object-Oriented Programming",      "subject" => "Casustoets",              "completed" => true,    "grade" => 8.6,     "EC" => 5.0],
            ["blok" => 2,   "cursus" => "Object-Oriented Programming",      "subject" => "Groepsopdracht",          "completed" => true,    "grade" => 8.3,     "EC" => 5.0],
            ["blok" => 2,   "cursus" => "Professional Skills 1",            "subject" => "Portfolio",               "completed" => true,    "grade" => 7.5,     "EC" => 0.83],
            ["blok" => 2,   "cursus" => "Professional Skills 1",            "subject" => "Taaltoets Nederlands",    "completed" => true,    "grade" => 5.5,     "EC" => 0.0],
            ["blok" => 2,   "cursus" => "Professional Skills 1",            "subject" => "Functioneringsgesprek",   "completed" => true,    "grade" => 6.0,     "EC" => 0.83],
            ["blok" => 2,   "cursus" => "Professional Skills 1",            "subject" => "Presentatie",             "completed" => true,    "grade" => 6.0,     "EC" => 0.84],
            ["blok" => 2,   "cursus" => "HZ-Personality 2a",                "subject" => "Portfoliotoets",          "completed" => false,   "grade" => NULL,    "EC" => 2.5],
            ["blok" => 3,   "cursus" => "Framework Development 1",          "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 5.0],
            ["blok" => 3,   "cursus" => "Framework Project 1",              "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 5.0],
            ["blok" => 3,   "cursus" => "Professional Skills 2",            "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["blok" => 3,   "cursus" => "Professional Skills 2",            "subject" => "Toets 2",                 "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["blok" => 3,   "cursus" => "Professionele Werkplek 1",         "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 2.5],
            ["blok" => 4,   "cursus" => "Framework Development 2",          "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 5],
            ["blok" => 4,   "cursus" => "Framework Project 2",              "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 5],
            ["blok" => 4,   "cursus" => "Professional Skills 3",            "subject" => "Toets 1",                 "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["blok" => 4,   "cursus" => "Professional Skills 3",            "subject" => "Toets 2",                 "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["blok" => 4,   "cursus" => "IT Personality 2a",                "subject" => "Portfoliotoets",          "completed" => false,   "grade" => NULL,    "EC" => 2.5],
        ]);
    }
}
