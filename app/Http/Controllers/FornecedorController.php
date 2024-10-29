<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedor()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '555.555.555-55',
                'ddd' => '71',  //SALVADOR (BA)
                'telefone' => '8888 - 8888'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '888.888.888-88',
                'ddd' => '11',  //SÃO PAULO (SP)
                'telefone' => '8888 - 8888'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '999.999.999-99',
                'ddd' => '79', //SIMÃO DIAS (SE)
                'telefone' => '8888 - 8888'
            ]
        ];



        return view('app.fornecedor', compact('fornecedores'));
    }
}
