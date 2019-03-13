<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
            'user_login' => Str::random(10).'@gmail.com',
            'user_pass' => bcrypt('secret'),
        ]);
        $this->call(UsersTableSeeder::class);
        
    }
}
