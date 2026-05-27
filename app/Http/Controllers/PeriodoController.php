<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodoModel;

class PeriodoController extends Controller
{
    function index(){

        $periodos = PeriodoModel::all();

        return view('periodo.index', [
            'periodos' => $periodos
        ]);
    }

    function add(Request $dados){

        PeriodoModel::create([
            'descricao' => $dados->descricao
        ]);

        return redirect()->route('periodo.index')
        ->with('success', 'Cadastrado!');
    }
}