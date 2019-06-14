<?php

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
            ['name' => 'view_test'],
            ['name' => 'create_test'],
            ['name' => 'update_test'],
            ['name' => 'delete_test'],
            ['name' => 'view_course'],
            ['name' => 'create_course'],
            ['name' => 'update_course'],
            ['name' => 'delete_course'],
            ['name' => 'view_blok'],
            ['name' => 'create_blok'],
            ['name' => 'update_blok'],
            ['name' => 'delete_blok'],
            ['name' => 'view_assignment'],
            ['name' => 'create_assignment'],
            ['name' => 'update_assignment'],
            ['name' => 'delete_assignment'],
        ]);
    }
}
