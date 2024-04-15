<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showHome(){
        return view('home');
    }

    //funcao para o formulario de cadastro do cliente
    public function showFormularioCadastro(Request $request){
        return view('formularioCadastroCliente');
    }

    //funcao para resgate dos dados do formulario e envialos para o banco
    public function cadCliente(Request $request){

        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        //o create e para inserir ou criar um novo dado
        Cliente::create($dadosValidos);

        return Redirect::route('home');
    }

    //funcao para mostrar os dados gerenciados para nos
    public function mostrarGerenciarClienteId (Cliente $id){

        return view('formularioAlterarCliente',['registroClientes' => $id]);
    }

    //funcao para gerenciar os dados
    public function gerenciarCliente (Request $request){

        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosCliente = $dadosCliente->get();

        return view('gerenciarCliente',['registroClientes' => $dadosCliente]);
    }

    //apagar dados salvos
    public function destroy(Cliente $id){
        
        $id->delete();
        return Redirect::route('home');
    }

    //alterar dados registrados do cliente
    public function alterarClienteBanco(Cliente $id,Request $request){

        //o request e uma variavel que contem os dados cadastrados no formulario por post
        //ele ira validar se esses dados do validardados existe, so assim para eles serem salvos
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        //fill serve para organizar os dados recadastrados
        $id->fill($dadosValidos);
        //salvar dados 
        $id->save();
        return Redirect::route('home');
    }
}
