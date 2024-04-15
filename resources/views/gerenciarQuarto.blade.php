@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Gerenciar Dados do Quarto</h1>
    <form method='get' action="{{route('gerenciar-quarto')}}">
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
        <th scope="col">Tipo do Quarto</th>
        <th scope="col">Editar</th>
        <th scope="col">Valor</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     
    @foreach($registroQuartos as $registroQuartosLoop)


      <tr>
      <th scope="row">{{$registroQuartosLoop->id}}</th>
        <td>{{$registroQuartosLoop->numero}}</td>
        <td>{{$registroQuartosLoop->tipo}}</td>
        <td>{{$registroQuartosLoop->valor}}</td>
        <td>
          <a href="{{route('mostrar-quarto', $registroQuartosLoop->id)}}">
            <button type="button" class="btn btn-primary">O</button>
          </a>
        </td>
        <td>
        <form method="post" action="{{route('apaga-quarto', $registroQuartosLoop->id)}}">
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