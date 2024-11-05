<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;


class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato= new SiteContato();
        // $contato->nome='Sistema GG';
        // $contato->telefone='(71) 9 6666-4444';
        // $contato->email='contato@gg.com.br';
        // $contato->motivo_contato=1;
        // $contato->mensagem='Mensagem aqui!';
        // $contato->save();

        SiteContato::factory()->count(100)->create();
    }
}
