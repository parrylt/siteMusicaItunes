<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Musicas;

class MusicasController extends Controller
{
    public function showHome(){
        return view('home');
    }


    public function showCadastroMusicas(Request $request){
        return view('cadastroMusica');
    }

    public function cadMusicas(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'genero' => 'string|required',
            'valor' => 'numeric|required',
            'img' => 'string|required',
            'autor' => 'string|required',
        ]);

        Musicas::create($dadosValidos);

        return view('home');
    }

    //funcao para mostrar os dados gerenciados para nos
    public function mostrarGerenciarMusicaId(Musicas $id){

        return view('formularioAlterarMusica',['registroMusicas' => $id]);
    }

    // funcao mostrar todas as musicas para o usuario
    public function mostrarMusicas(Request $request){
        $dadosMusicas = Musicas::all();
        return view('mostrarMusicas',['registroMusicas' => $dadosMusicas]);
    }

    //funcao para gerenciar os dados
    public function gerenciarMusicas(Request $request){

        $dadosMusica = Musicas::query();
        $dadosMusica->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosMusica = $dadosMusica->get();

        return view('gerenciarMusicas',['registroMusicas' => $dadosMusica]);
    }

    //apagar dados salvos
    public function destroy(Musicas $id){
        
        $id->delete();
        return Redirect::route('home');
    }

    //alterar dados registrados do cliente
    public function alterarMusicasBanco(Musicas $id,Request $request){

        //o request e uma variavel que contem os dados cadastrados no formulario por post
        //ele ira validar se esses dados do validardados existe, so assim para eles serem salvos
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'genero' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        //fill serve para organizar os dados recadastrados
        $id->fill($dadosValidos);
        //salvar dados 
        $id->save();

        return Redirect::route('home');

    }

}