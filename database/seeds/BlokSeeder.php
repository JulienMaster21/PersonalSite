<?php

use Illuminate\Database\Seeder;
use \App\Blok;
use Carbon\Carbon;

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
            ["id" => 1, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["id" => 2, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["id" => 3, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            ["id" => 4, "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
        ]);
    }
}
