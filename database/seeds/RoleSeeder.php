<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'gebruiker',     "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ['name' => 'administrator', "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
