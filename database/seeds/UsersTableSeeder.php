<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
