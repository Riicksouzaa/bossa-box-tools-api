<?php

use Illuminate\Database\Seeder;

class TagToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('tag_tool')->delete();
        \Illuminate\Support\Facades\DB::table('tag_tool')->insert([
            0 => ["tool_id" => 1, "tag_id" => 1],
            1 => ["tool_id" => 1, "tag_id" => 2],
            2 => ["tool_id" => 1, "tag_id" => 3],
            3 => ["tool_id" => 1, "tag_id" => 4],
            4 => ["tool_id" => 1, "tag_id" => 5],
            5 => ["tool_id" => 2, "tag_id" => 6],
            6 => ["tool_id" => 2, "tag_id" => 7],
            7 => ["tool_id" => 2, "tag_id" => 8],
            8 => ["tool_id" => 2, "tag_id" => 9],
            9 => ["tool_id" => 2, "tag_id" => 10],
            10 => ["tool_id" => 2, "tag_id" => 11],
            11 => ["tool_id" => 3, "tag_id" => 12],
            12 => ["tool_id" => 3, "tag_id" => 9],
            13 => ["tool_id" => 3, "tag_id" => 14],
            14 => ["tool_id" => 3, "tag_id" => 15],
            15 => ["tool_id" => 3, "tag_id" => 16],
            16 => ["tool_id" => 3, "tag_id" => 17],
        ]);
    }
}
