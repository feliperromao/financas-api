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
        $user = DB::table('users')->insertGetId([
            'name' => 'user',
            'email' => 'user'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'COMMON',
            'active' => true,
        ]);
        
        Log::debug(json_encode($user));

        $admin = DB::table('users')->insertGetId([
            'name' => 'admin',
            'email' => 'admin'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'ADMIN',
            'active' => true,
        ]);

        Log::debug(json_encode($admin));

        $vip = DB::table('users')->insertGetId([
            'name' => 'vip',
            'email' => 'vip'.'@mail.com',
            'password' => bcrypt('123456'),
            'type' => 'VIP',
            'active' => true,
        ]);

        Log::debug(json_encode($vip));

        DB::table('categories')->insert([
            'description' => 'Moradia',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Transporte',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Educação',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Alimentação',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Pagamentos em geral',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Higiene pessoal',
            'user_id' => $user,
        ]);

        DB::table('categories')->insert([
            'description' => 'Saúde',
            'user_id' => $user,
        ]);
    }
}
