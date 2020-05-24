<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bossa_box_user',
            'email' => 'user@bossabox.com',
            'password' => Hash::make('example'),
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ]);


        // $this->call(UserSeeder::class);
        $this->call(ToolsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TagToolTableSeeder::class);
    }
}
