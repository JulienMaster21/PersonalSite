<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        $adminUser = factory(User::class)->make();
        $adminUser->auth_level = 3;
        $adminUser->save();
        echo("\nAn administrative user is set up with the following credentials.\nemail: " . $adminUser->email . "\npassword:secret\n");
    }
}
