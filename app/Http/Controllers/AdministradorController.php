<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    function index(){

        $administrador = new \App\Models\AdministradorModel();

        return view('administrador.index', [
            'administradores'=>$administrador::all()
        ]);
    }

    function add(Request $dados) { 
        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
	                'telefone' => 'required|min:14|max:16',
	                'email' => 'required|min:5|max:255',
	                'cpf' => 'required|min:11|max:11',
	                'status' => 'required|min:30|max:255',

	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
	            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('administrador.index')
                ->withErrors($validator)
                ->withInput();
        }
        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());

        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
        $administradores = new \App\Models\AdministradorModel();

        return view('adminitrador.index', ['success'=>'Cadastrado!', 'Administradores'=>$administradores::all()]);
    }
    


    function remove(string $id){

        $administrador = new \App\Models\AdministradorModel();

        $administrador::destroy($id);

        return view('administrador.index', [
            'success'=>'Removido!',
            'administradores'=>$administrador::all()
        ]);
    }

    function atualizar(string $id){

        $administrador = new \App\Models\AdministradorModel();

        $administrador = $administrador::find($id);

        return view('administrador.atualizar', [
            'administrador'=>$administrador
        ]);
    }

    function save(Request $dados){

        $administrador = new \App\Models\AdministradorModel();

        $administrador = $administrador::find($dados->id);

        $administrador->update($dados->all());

        return view('administrador.atualizar', [
            'success'=>'Atualizado!',
            'administrador'=>$administrador
        ]);
    }
}