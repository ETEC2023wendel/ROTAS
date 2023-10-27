<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {
        return view('contato');
    }

    public function enviarMensagem(Request $request) {
        // Lógica para processar o formulário de contato e enviar a mensagem
        // Você pode acessar os dados do formulário usando $request->input('nome_do_campo')
        // Por exemplo: $nome = $request->input('nome');
        // Após processar o formulário, você pode redirecionar o usuário para uma página de confirmação
        return redirect('/contato/confirmacao');
    }
}
