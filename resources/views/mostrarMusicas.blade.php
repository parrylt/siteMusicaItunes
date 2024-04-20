@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Ver Musicas</h1>
  </div>

  
  <table class="table">

    <tbody>
     
    @foreach($registroMusicas as $registroMusicasLoop)


      <tr>
      <div class="d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
  <img src="assets/{{$registroMusicasLoop->img}}" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center fw-bolder">{{$registroMusicasLoop->nome}}</h5>
            </br>
              <p class="card-text">Autor: &nbsp;{{$registroMusicasLoop->autor}}</p>
              <p class="card-text">Genero: &nbsp;{{$registroMusicasLoop->genero}}</p>
              <p class="card-text">Valor: &nbsp;{{$registroMusicasLoop->valor}}</p>
  </div>
</div>
</div>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection