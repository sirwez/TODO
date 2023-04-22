<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarefasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        //cria 50 registros de tarefas
        for ($i = 0; $i < 50; $i++) {
            \App\Models\Tarefa::create([
                'descricao' => $faker->sentence,
                'concluida' => $faker->boolean,
            ]);
        }
    }
}
