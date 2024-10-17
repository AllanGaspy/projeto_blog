<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Allan Guilherme - ADMIN',
            'email' => 'allanguimendes@gmail.com',
            'password' => Hash::make('842695137'),
            'perfil' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Allan Guilherme - PADRAO',
            'email' => 'allanguimendes@padrao.com',
            'password' => Hash::make('842695137'),
            'perfil' => 'padrao',
        ]);
    }
}
