<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hast;
use Illuminate\Support\Facades\Validator;

class UsuarioAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function cadastro(){
        return view('auth.registro');
    }
    public function registro(Request $request){
        $validation = Validator::make($request->all(),[
            'cpf' => 'required|max:50',
            'nome' => 'required|max:50',
            'endereco' => 'required|max:50',
            'telefone' => 'required|max:50',
            'cidade' => 'required|max:50',
            'estado' => 'required|max:50',
            'email' => 'email|unique:usuarios',
            'cep' => 'required|max:50',
            'password' => 'required|min:6',
            'nivel_de_acesso' => 'required|max:2' 
            ]);
            
            if($validation->fails()){
                return redirect('/registrar')
                ->withInput()
                ->withErrors($validation);
            }

            $usuar = new usuario();
            $usuar->cpf = $request->cpf;
            $usuar->nome = $request->nome;
            $usuar->endereco = $request->endereco;
            $usuar->cidade = $request->cidade;
            $usuar->cep = $request->cep;
            $usuar->telefone = $request->telefone;
            $usuar->estado = $request->estado;
            $usuar->email = $request->email;
            $usuar->password = bcrypt($request->password);
            $usuar->nivel_de_acesso = $request->nivel_de_acesso;
            $usuar->save();

            if($usuar) {
                return back()->with('success', 'O usuario foi cadastrado com sucesso !!');
            }else{
                return back()->with('fail', 'Não foi possivel cadastrar o usuario !!');
            }
    }

    function checage(Request $request){

        $request->validate([
            'cpf' => 'required|max:50',
            'password' => 'required|min:6'
        ]);
    }
}
