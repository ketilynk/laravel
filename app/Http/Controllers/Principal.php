<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }
     function contato(string $nome){
        // echo "o nome do contato é: $nome";
        $contato =[
            "nome"=> $nome
        ];
        return view('contato, $contato');

     }
     function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "o nome completo é : $nome $sobrenome";
     }
     function assunto(string $nome, string $sobrenome, string $assunto){
        echo "<h1>contato: $nome $sobrenome</h1>";
        echo "<marquee>$assunto</marquee>";
     }

     function mensagem(string $nome, string $sobrenome, string $assunto, string $email, string $tefelone ='telefone nao informado'){
        echo "<h1>contato: $nome $sobrenome</h1>";
        echo "<marquee>$assunto</marquee>";
        echo "telefone: $telefone <br>";
        echo "EMAIL: $email";
     }

    
}


