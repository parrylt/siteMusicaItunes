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
        return view('admin/cadastroMusica');
    }

    public function cadMusicas(Request $request){
        $dadosValidos = $request->validate([
            'image' => 'string|required',
            'nome' => 'string|required',
            'banda' => 'string|required',
            'genero' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        Musicas::create($dadosValidos);

        return view('home');
    }

    //funcao para mostrar os dados gerenciados para nos
    public function mostrarGerenciarMusicaId(Musicas $id){

        return view('formularioAlterarMusica',['registroMusicas' => $id]);
    }

    public function mostrarMusicas(Request $request){
        $dadosMusicas = Musicas::all();
        return view('mostrarMusicas',['registroMusicas' => $dadosMusicas]);
    }

    //funcao para gerenciar os dados
    public function gerenciarMusicas(Request $request){

        $dadosQuarto = Musicas::query();
        $dadosQuarto->when($request->numero,function($query,$valor){
            $query->where('numero','like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('admin/gerenciarMusicas',['registroMusicas' => $dadosQuarto]);
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
            'image' => 'string|required',
            'nome' => 'string|required',
            'banda' => 'string|required',
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
