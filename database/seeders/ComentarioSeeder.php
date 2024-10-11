<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'user_id' => 1,
            'conteudo' => 'Achei muito foda',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 2,
            'user_id' => 1,
            'conteudo' => 'To com fome',
        ]);
        DB::table('comentarios')->insert([
            'postagem_id' => 3,
            'user_id' => 1,
            'conteudo' => 'Uma merda',
        ]);
    }
}
