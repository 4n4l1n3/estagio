<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documento::create([
            'nome' => 'Ficha de matricula',
            'descricao' => 'Documento para realizar matrícula',

        ]);

        Documento::create([
            'nome' => 'Termo de Compromisso',
            'descricao' => 'Documento para assinar termos de compromisso necessários',

        ]);
    }
    
}
