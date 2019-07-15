<?php

use Illuminate\Database\Seeder;
use \App\Test;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            ['name' => 'Theorietentamen',       'course_id' => 1,   'completed' => 1,   'grade' => 7.9,     'EC' => 7.5,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 2,   'completed' => 1,   'grade' => 6.0,     'EC' => 2.5,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Casustoets',            'course_id' => 3,   'completed' => 1,   'grade' => 8.0,     'EC' => 5.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Casustoets',            'course_id' => 4,   'completed' => 1,   'grade' => 8.6,     'EC' => 5.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Groepsopdracht',        'course_id' => 4,   'completed' => 1,   'grade' => 8.3,     'EC' => 5.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Portfolio',             'course_id' => 5,   'completed' => 1,   'grade' => 7.5,     'EC' => 0.83,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Taaltoets Nederlands',  'course_id' => 5,   'completed' => 1,   'grade' => 5.5,     'EC' => 0.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Functioneringsgesprek', 'course_id' => 5,   'completed' => 1,   'grade' => 6.0,     'EC' => 0.83,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Presentatie',           'course_id' => 5,   'completed' => 1,   'grade' => 6.0,     'EC' => 0.84,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Portfoliotoets',        'course_id' => 6,   'completed' => 0,   'grade' => NULL,    'EC' => 2.5,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 7,   'completed' => 1,   'grade' => 10.0,    'EC' => 5.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 8,   'completed' => 1,   'grade' => 7.0,     'EC' => 5.0,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 9,   'completed' => 0,   'grade' => NULL,    'EC' => 1.25,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 2',               'course_id' => 9,   'completed' => 1,   'grade' => 8.3,     'EC' => 1.25,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 10,  'completed' => 1,   'grade' => 8.6,     'EC' => 2.5,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 11,  'completed' => 0,   'grade' => NULL,    'EC' => 5,      "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 12,  'completed' => 0,   'grade' => NULL,    'EC' => 5,      "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 1',               'course_id' => 13,  'completed' => 0,   'grade' => NULL,    'EC' => 1.25,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Toets 2',               'course_id' => 13,  'completed' => 0,   'grade' => NULL,    'EC' => 1.25,   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'Portfoliotoets',        'course_id' => 14,  'completed' => 0,   'grade' => NULL,    'EC' => 2.5,    "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
