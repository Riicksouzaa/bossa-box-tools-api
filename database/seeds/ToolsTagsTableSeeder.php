<?php

use Illuminate\Database\Seeder;

class ToolsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('tools_tags')->delete();
        \Illuminate\Support\Facades\DB::table('tools_tags')->insert([
            0 => ["tool_id" => 1, "tag_id" => 1, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            1 => ["tool_id" => 1, "tag_id" => 2, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            2 => ["tool_id" => 1, "tag_id" => 3, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            3 => ["tool_id" => 1, "tag_id" => 4, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            4 => ["tool_id" => 1, "tag_id" => 5, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            5 => ["tool_id" => 2, "tag_id" => 6, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            6 => ["tool_id" => 2, "tag_id" => 7, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            7 => ["tool_id" => 2, "tag_id" => 8, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            8 => ["tool_id" => 2, "tag_id" => 9, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            9 => ["tool_id" => 2, "tag_id" => 10, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            10 => ["tool_id" => 2, "tag_id" => 11, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            11 => ["tool_id" => 3, "tag_id" => 12, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            12 => ["tool_id" => 3, "tag_id" => 13, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            13 => ["tool_id" => 3, "tag_id" => 14, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            14 => ["tool_id" => 3, "tag_id" => 15, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            15 => ["tool_id" => 3, "tag_id" => 16, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
            16 => ["tool_id" => 3, "tag_id" => 17, 'created_at' => new DateTime('now'), 'updated_at' => new DateTime('now')],
        ]);
    }
}
