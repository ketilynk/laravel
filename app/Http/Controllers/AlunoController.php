<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index ( Request $dados){
       return view('aluno.index');
    }

    function adicionar ( Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
        return view ('aluno.index',['sucesso' => 'aluno cadastrado!']);

    }
    function remover ( Request $dados){

    }
    function atualizar ( Request $dados){

    }
    function consultar (){

    }
}
