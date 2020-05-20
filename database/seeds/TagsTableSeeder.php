<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('tags')->delete();
        \Illuminate\Support\Facades\DB::table('tags')->insert(
            [
                0 => ["name" => "organization"],
                1 => ["name" => "planning"],
                2 => ["name" => "collaboration"],
                3 => ["name" => "writing"],
                4 => ["name" => "calendar"],
                5 => ["name" => "api"],
                6 => ["name" => "json"],
                7 => ["name" => "schema"],
                8 => ["name" => "node"],
                9 => ["name" => "github"],
                10 => ["name" => "rest"],
                11 => ["name" => "web"],
                12 => ["name" => "framework"],
                13 => ["name" => "node"],
                14 => ["name" => "http2"],
                15 => ["name" => "https"],
                16 => ["name" => "localhost"],
            ]
        );
    }
}
