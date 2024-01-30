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


        $regras = [
            'email'    => 'required|email',
            'password' => 'required'
        ];

        $msg = [
            'email.required'    => 'O campo de e-mail é obrigatório.',
            'email.required'    => 'O e-mail informado não é válido.',
            'password.required' => 'O campo de senha é obrigatório.'
        ];

        $request->validate($regras, $msg);

        // print_r($request->all());

        $email = $request->get('email');
        $senha = $request->get('password');

        // echo "E-mail: $email | Senha: $senha";
        // echo "<br>";

        $usuario = Usuario::where('email', $email)->first();


        if(!$usuario){
            return back()->witchErrors(['email' => 'O email informado não está cadastrado.']);
        }



        if($usuario->senha != $senha){
            return back()->withErrors(['password' => 'Senha Incorreta.']);
        }

        // dd($usuario);

        $tipoUsuario = $usuario ->tipo_usuario;

        // dd($tipoUsuario);

        if($tipoUsuario instanceof Aluno){
            dd($tipoUsuario);
        }elseif($tipoUsuario instanceof Funcionario){
            dd($tipoUsuario);
        }



    }
}
