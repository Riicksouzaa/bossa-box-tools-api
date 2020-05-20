<?php

use Illuminate\Database\Seeder;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('tools')->delete();
        \Illuminate\Support\Facades\DB::table('tools')->insert(
            [
                0 => [
                    'title' => 'Notion',
                    'link' => 'https://notion.so',
                    'description' => 'All in one tool to organize teams and ideas. Write, plan, collaborate, and get organized.'
                ],
                1 => [
                    'title' => 'json-server',
                    'link' => 'https://github.com/typicode/json-server',
                    'description' => 'Fake REST API based on a json schema. Useful for mocking and creating APIs for front-end devs to consume in coding challenges.'
                ],
                2 => [
                    'title' => 'fastify',
                    'link' => 'https://www.fastify.io/',
                    'description' => 'Extremely fast and simple, low-overhead web framework for NodeJS. Supports HTTP2.'
                ]
            ]
        );
    }
}
