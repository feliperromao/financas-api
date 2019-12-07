<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'description' => 'Moradia',
        ]);

        DB::table('users')->insert([
            'description' => 'Transporte',
        ]);

        DB::table('users')->insert([
            'description' => 'Educação',
        ]);

        DB::table('users')->insert([
            'description' => 'Alimentação',
        ]);

        DB::table('users')->insert([
            'description' => 'Pagamentos em geral',
        ]);

        DB::table('users')->insert([
            'description' => 'Higiene pessoal',
        ]);

        DB::table('users')->insert([
            'description' => 'Saúde',
        ]);
    }
}
