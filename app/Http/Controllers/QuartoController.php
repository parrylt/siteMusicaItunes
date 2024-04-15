<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome(){
        return view('home');
    }


    public function showFormularioQuarto(Request $request){
        return view('escolherQuarto');
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        Quarto::create($dadosValidos);

        return view('home');
    }

    //funcao para mostrar os dados gerenciados para nos
    public function mostrarGerenciarQuartoId(Quarto $id){

        return view('formularioAlterarQuarto',['registroQuartos' => $id]);
    }

    //funcao para gerenciar os dados
    public function gerenciarQuarto (Request $request){

        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->numero,function($query,$valor){
            $query->where('numero','like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('gerenciarQuarto',['registroQuartos' => $dadosQuarto]);
    }

    //apagar dados salvos
    public function destroy(Quarto $id){
        
        $id->delete();
        return Redirect::route('home');
    }

    //alterar dados registrados do cliente
    public function alterarQuartoBanco(Quarto $id,Request $request){

        //o request e uma variavel que contem os dados cadastrados no formulario por post
        //ele ira validar se esses dados do validardados existe, so assim para eles serem salvos
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        //fill serve para organizar os dados recadastrados
        $id->fill($dadosValidos);
        //salvar dados 
        $id->save();

        return Redirect::route('home');

    }

}

