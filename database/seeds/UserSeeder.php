<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
//        factory(User::class, 10)->create();
//        $adminUser = factory(User::class)->make();
        $adminUser = new User();
        $adminUser->name = 'admin';
        $adminUser->email = 'admin@example.com';
        $adminUser->email_verified_at = now();
        $adminUser->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; //secret
        $adminUser->remember_token = Str::random(10);
        $adminUser->auth_level = 3;
        $adminUser->save();
        echo('\nAn administrative user is set up with the following credentials.\nemail: ' . $adminUser->email . '\npassword:secret\n');
    }
}
