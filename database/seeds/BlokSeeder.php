<?php

use Illuminate\Database\Seeder;
use \App\Blok;

class BlokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Blok::class, 4)->create();
        DB::table("bloks")->insert([
            ["id" => 1],
            ["id" => 2],
            ["id" => 3],
            ["id" => 4],
        ]);
    }
}
