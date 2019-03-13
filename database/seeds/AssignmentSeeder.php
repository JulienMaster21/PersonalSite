<?php

use Illuminate\Database\Seeder;
use \App\Assignment;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Assignment::class, 20)->create();
    }
}
