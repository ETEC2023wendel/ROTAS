<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem; // Certifique-se de importar o modelo apropriado para interagir com o banco de dados, se necessário

class ContatoController extends Controller
{
    public function index() {
        return view('contato');
    }

    public function enviarMensagem(Request $request) {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
        ]);

        // Crie uma nova instância do modelo Mensagem (se você tiver um modelo) para salvar os dados no banco de dados
        $mensagem = new Mensagem();
        $mensagem->nome = $request->input('nome');
        $mensagem->email = $request->input('email');
        $mensagem->mensagem = $request->input('mensagem');
        $mensagem->save();

        // Após salvar no banco de dados, você pode redirecionar o usuário para uma página de confirmação
        return redirect('/contato/confirmacao')->with('success', 'Mensagem enviada com sucesso!');
    }
}
