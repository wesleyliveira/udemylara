<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
class ContatoController extends Controller
{
    public function contato(Request $request)
    {   

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];


        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request)    {

        $request->validate([
            'nome' => 'required|min:3|max:80',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'motivo_contato' => 'required|string|max:255',
            'mensagem' => 'required|max:2000',
        ]);
        // SiteContato::create($request->all());
    }
}