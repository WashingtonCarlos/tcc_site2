<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hast;
use Illuminate\Support\Facades\Validator;

class UsuarioAuthController extends Controller
{
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
    }
}
