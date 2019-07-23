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
            ['name' => 'can view tests',            'slug' => 'view_test',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create tests',          'slug' => 'create_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update tests',          'slug' => 'update_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete tests',          'slug' => 'delete_test',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can view courses',          'slug' => 'view_course',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create courses',        'slug' => 'create_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update courses',        'slug' => 'update_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete courses',        'slug' => 'delete_course',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can view bloks',            'slug' => 'view_blok',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create bloks',          'slug' => 'create_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update bloks',          'slug' => 'update_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete bloks',          'slug' => 'delete_blok',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can view assignments',      'slug' => 'view_assignment',   "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create assignments',    'slug' => 'create_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update assignments',    'slug' => 'update_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete assignments',    'slug' => 'delete_assignment', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can view users',            'slug' => 'view_user',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create users',          'slug' => 'create_user',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update users',          'slug' => 'update_user',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete users',          'slug' => 'delete_user',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can view roles',            'slug' => 'view_role',         "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can create roles',          'slug' => 'create_role',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can update roles',          'slug' => 'update_role',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'can delete roles',          'slug' => 'delete_role',       "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
