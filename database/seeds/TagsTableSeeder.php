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
                0 => ["name" => "organization", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                1 => ["name" => "planning", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                2 => ["name" => "collaboration", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                3 => ["name" => "writing", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                4 => ["name" => "calendar", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                5 => ["name" => "api", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                6 => ["name" => "json", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                7 => ["name" => "schema", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                8 => ["name" => "node", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                9 => ["name" => "github", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                10 => ["name" => "rest", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                11 => ["name" => "web", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                12 => ["name" => "framework", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                13 => ["name" => "node", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                14 => ["name" => "http2", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                15 => ["name" => "https", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
                16 => ["name" => "localhost", 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            ]
        );
    }
}
