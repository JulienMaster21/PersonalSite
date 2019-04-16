<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BlokSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(AssignmentSeeder::class);
        $this->call(UserSeeder::class);
    }
}
