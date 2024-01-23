<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use App\Models\ContatoNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
        public function index(){
            return view('site.contato');
        }

        public function salvarNoBanco(Request $request){

            // dd($request);

            $dados = $request->json()->all();

            $validarDados = Validator::make($dados, [
                'nomeContato'       => 'required|max:100',
                'emailContato'      => 'required|email|max:100',
                'foneContato'       => 'required|max:15',
                'assuntoContato'    => 'required|max:100',
                'mensContato'       => 'required',


            ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);

        } else {

            $contato = Contato::create($validarDados->validated());

            //Por email
            Mail::to('webdequebrada@smpsistema.com.br')->send(new ContatoEmail($contato));

            return response()->json(['success' => 'Email registrado com sucesso']);

        }
    }

        public function salvarEmail(Request $request){
            $dados = $request->json()->all();

            $validarDados = Validator::make($dados, [
                'emailContato'      => 'required|email|max:100|unique:contato_news,emailContato',
            ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);

        } else {

        $verificarEmail = ContatoNews::where('emailContato', $dados['emailContato'])->exists(); // Verificar se o email já existe antes de criar uma nova entrada

        if ($verificarEmail) {
            return response()->json(['errors' => ['emailContato' => 'Este e-mail já está registrado.']], 422); // Retorno de erro caso email já exista
        }

        ContatoNews::create($validarDados->validated()); // Criar uma nova entrada no banco de dados

        return response()->json(['success' => 'Email registrado com sucesso']); // Registro do email
        }
    }
}
