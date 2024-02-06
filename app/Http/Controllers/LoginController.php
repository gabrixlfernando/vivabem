<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login');
    }

    public function autenticar(Request $request)
    {
        // return "chguei aqui";

         // Regras de validação para os campos 'email' e 'password'
        $regras = [
            'email'    => 'required|email',
            'password' => 'required'
        ];
        // Mensagens de erro personalizadas para as regras de validação
        $msg = [
            'email.required'    => 'O campo de e-mail é obrigatório.',
            'email.required'    => 'O e-mail informado não é válido.',
            'password.required' => 'O campo de senha é obrigatório.'
        ];
        // Executa a validação dos dados recebidos na requisição
        $request->validate($regras, $msg);

        // print_r($request->all());

        // Obtém os valores dos campos 'email' e 'password' da requisição
        $email = $request->get('email');
        $senha = $request->get('password');

        // echo "E-mail: $email | Senha: $senha";
        // echo "<br>";

        // Busca um usuário no banco de dados com base no email fornecido
        $usuario = Usuario::where('email', $email)->first();

         // Verifica se o usuário existe no banco de dados
        if(!$usuario){
            return back()->witchErrors(['email' => 'O email informado não está cadastrado.']);
        }


        // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
        if($usuario->senha != $senha){
            return back()->withErrors(['password' => 'Senha Incorreta.']);
        }

        // dd($usuario);

        // Obtém o tipo de usuário associado ao usuário autenticado
        $tipoUsuario = $usuario ->tipo_usuario;

        // dd($tipoUsuario);

         // Realiza ações diferentes com base no tipo de usuário
        if($tipoUsuario instanceof Aluno){

            //dd($tipoUsuario);

           session([
                'id'            => $tipoUsuario->idAluno,
                'nome'          => $tipoUsuario->nomeAluno,
                'tipo_usuario'  => 'Aluno',
           ]);

           return redirect()->route('dashboard.alunos');

        }elseif($tipoUsuario instanceof Funcionario){

            if($tipoUsuario->tipoFuncionario == 'administrativo'){
                //dd($tipoUsuario);

                session([
                    'id'            => $tipoUsuario->idFuncionario,
                    'nome'          => $tipoUsuario->nomeFuncionario,
                    'tipo_usuario'  => $tipoUsuario->tipoFuncionario,
               ]);

               return redirect()->route('dashboard.administrativo');

            }elseif($tipoUsuario->tipoFuncionario == 'tecnico'){
                //dd($tipoUsuario);

                session([
                    'id'            => $tipoUsuario->idFuncionario,
                    'nome'          => $tipoUsuario->nomeFuncionario,
                    'tipo_usuario'  => $tipoUsuario->tipoFuncionario,
               ]);

               return redirect()->route('dashboard.instrutor');

            }
        }


        return back()->withErrors(['email' => 'Erro desconhecido autenticação']);



    }
}
