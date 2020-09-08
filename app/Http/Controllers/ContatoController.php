<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    //
    public function index(){

        $contatos = [
            (object)["nome"=>"Maria", "telefone"=>"64517782"],
            (object)["nome"=>"Jose", "telefone"=>"44741259"],
        ];

        $contato = new Contato();
        $con =  $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }
    
}
