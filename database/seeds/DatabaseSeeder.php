<?php

use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'COMMON',
            'active' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'ADMIN',
            'active' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'vip',
            'email' => 'vip'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'VIP',
            'active' => true,
        ]);
    }
}
