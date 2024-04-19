@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Gerenciar Dados da Musica</h1>
    <form method='get' action="{{route('gerenciar-musicas')}}">
      <div class="row center">
        <div class="col">
          <input type="number" id="nome" name="numero" class="form-control" placeholder="Digite o Número do Quarto" aria-label="Número">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
      <th scope="col">id</th>
        <th scope="col">Número do Quarto</th>
        <th scope="col">Editar</th>
        <th scope="col">Valor</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     
    @foreach($registroMusicas as $registroMusicasLoop)


      <tr>
      <th scope="row">{{$registroMusicasLoop->id}}</th>
        <td>{{$registroMusicasLoop->nome}}</td>
        <td>{{$registroMusicasLoop->genero}}</td>
        <td>{{$registroMusicasLoop->valor}}</td>
        <td>
          <a href="{{route('mostrar-musicas', $registroMusicasLoop->id)}}">
            <button type="button" class="btn btn-primary">O</button>
          </a>
        </td>
        <td>
        <form method="post" action="{{route('apaga-musicas', $registroMusicasLoop->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"> X </button>
         </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection