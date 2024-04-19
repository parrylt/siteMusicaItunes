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
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{$registroMusicasLoop->nome}}</p>
    <p class="card-text">{{$registroMusicasLoop->genero}}</p>
    <p class="card-text">{{$registroMusicasLoop->valor}}</p>
  </div>
</div>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection