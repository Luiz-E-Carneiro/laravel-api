<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Tarefa::insert([
            [
                "texto" => "Preparar e tomar café da manhã",
            ],
            [
                "texto" => "Escovar os dentes e fazer higiene pessoal",
            ],
            [
                "texto" => "Verificar e responder e-mails importantes",
            ],
            [
                "texto" => "Organizar a mesa de trabalho",
            ],
            [
                "texto" => "Almoçar e fazer uma pausa breve",
            ],
            [
                "texto" => "Fazer uma hora de exercício físico",
            ],
            [
                "texto" => "Estudar ou ler por 30 minutos",
            ],
            [
                "texto" => "Preparar e jantar",
            ],
            [
                "texto" => "Lavar a louça e arrumar a cozinha",
            ],
            [
                "texto" => "Ler um livro ou assistir a um filme/série",
            ],
            [
                "texto" => "Programar o alarme e ir para a cama",
            ],
        ]);
    }
}
