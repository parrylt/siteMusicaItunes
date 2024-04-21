@extends('layout')
@section('content')
<section class="container m-5">

  
  <table class="table">

    <tbody>
     
    @foreach($registroMusicas as $registroMusicasLoop)


      <tr>
      <div class="d-flex justify-content-center">
      <div class="card" style="width: 21rem;">
  <img src="{{$registroMusicasLoop->image}}" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center fw-bolder">{{$registroMusicasLoop->nome}}</h5>
            </br>
              <p class="card-text">Banda: &nbsp;{{$registroMusicasLoop->banda}}</p>
              <p class="card-text">Genero: &nbsp;{{$registroMusicasLoop->genero}}</p>
              <p class="card-text">Valor: &nbsp;{{$registroMusicasLoop->valor}}</p>
        <audio controls>
          <source src="{{$registroMusicasLoop->musica}}" type="audio/mp3">
        </audio>
      </div>
    </div>
  </div>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection