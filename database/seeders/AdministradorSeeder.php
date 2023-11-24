<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::creater([
            'nome' => ' Analine',
            'email' => 'analise@teste.com',
            'senha' => bcrypt('naline73')
        ]);
    }
}
