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
        // factory(\App\Test::class, 20)->create();
        DB::table("tests")->insert([
            ["name" => "Theorietentamen",       "courses_id" => 1,   "completed" => true,    "grade" => 7.9,     "EC" => 7.5],
            ["name" => "Toets 1",               "courses_id" => 2,   "completed" => true,    "grade" => 6.0,     "EC" => 2.5],
            ["name" => "Casustoets",            "courses_id" => 3,   "completed" => true,    "grade" => 8.0,     "EC" => 5.0],
            ["name" => "Casustoets",            "courses_id" => 4,   "completed" => true,    "grade" => 8.6,     "EC" => 5.0],
            ["name" => "Groepsopdracht",        "courses_id" => 4,   "completed" => true,    "grade" => 8.3,     "EC" => 5.0],
            ["name" => "Portfolio",             "courses_id" => 5,   "completed" => true,    "grade" => 7.5,     "EC" => 0.83],
            ["name" => "Taaltoets Nederlands",  "courses_id" => 5,   "completed" => true,    "grade" => 5.5,     "EC" => 0.0],
            ["name" => "Functioneringsgesprek", "courses_id" => 5,   "completed" => true,    "grade" => 6.0,     "EC" => 0.83],
            ["name" => "Presentatie",           "courses_id" => 5,   "completed" => true,    "grade" => 6.0,     "EC" => 0.84],
            ["name" => "Portfoliotoets",        "courses_id" => 6,   "completed" => false,   "grade" => NULL,    "EC" => 2.5],
            ["name" => "Toets 1",               "courses_id" => 7,   "completed" => true,    "grade" => 10.0,    "EC" => 5.0],
            ["name" => "Toets 1",               "courses_id" => 8,   "completed" => true,    "grade" => 7.0,     "EC" => 5.0],
            ["name" => "Toets 1",               "courses_id" => 9,   "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["name" => "Toets 2",               "courses_id" => 9,   "completed" => true,    "grade" => 8.3,     "EC" => 1.25],
            ["name" => "Toets 1",               "courses_id" => 10,   "completed" => true,    "grade" => 8.6,     "EC" => 2.5],
            ["name" => "Toets 1",               "courses_id" => 11,   "completed" => false,   "grade" => NULL,    "EC" => 5],
            ["name" => "Toets 1",               "courses_id" => 12,   "completed" => false,   "grade" => NULL,    "EC" => 5],
            ["name" => "Toets 1",               "courses_id" => 13,   "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["name" => "Toets 2",               "courses_id" => 13,   "completed" => false,   "grade" => NULL,    "EC" => 1.25],
            ["name" => "Portfoliotoets",        "courses_id" => 14,   "completed" => false,   "grade" => NULL,    "EC" => 2.5],
        ]);
    }
}
