<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            ['role_id' => 1, 'permission_id' => 1,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 5,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 9,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 13, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 14, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 15, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 1, 'permission_id' => 16, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 1,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 2,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 3,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 4,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 5,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 6,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 7,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 8,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 9,  "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 10, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 11, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 12, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 13, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 14, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 15, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['role_id' => 2, 'permission_id' => 16, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
