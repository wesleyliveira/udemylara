<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSTANCIANDO O OBJETO
        $fornecedor = new   Fornecedor  (); 
        $fornecedor->nome = 'Fornecedor KJL';
        $fornecedor->site = 'fornecedorkjl.com.br';
        $fornecedor->uf = 'SE';
        $fornecedor->email = 'fornecedorkjl@contato.com';
        $fornecedor->save ();
        
        
        //METODO CREATE(FILLABLE O MODEL)
        Fornecedor::Create([
            'nome'=> 'Fornecedor WR',
            'site'=>'fornecedorwr.com.br',
            'uf'=>'PR',
            'email'=> 'contato@fornecedorwr.com',
        ]);

        //INSERT
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor OOO',
            'site'=>'fornecedorooo.com.br',
            'uf'=>'CE',
            'email'=>'contato@fornecedorooo.com',
        ]);
    }
}
