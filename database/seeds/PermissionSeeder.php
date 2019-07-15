<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'view_test',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'create_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'update_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'delete_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'view_course',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'create_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'update_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'delete_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'view_blok',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'create_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'update_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'delete_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'view_assignment',   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'create_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'update_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'delete_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
