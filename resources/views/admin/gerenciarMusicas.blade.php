@extends('admin/layoutAdmin')
@section('content')
<section class="container ">
  <div class="container">
    <h1 class="text">Gerenciador de Músicas</h1>
    </br>
    <form method='get' action="{{route('gerenciar-musicas')}}">
      <div class="row center">
        <div class="col">
          <input type="number" id="nome" name="numero" class="form-control" placeholder="Digite o Número da Música" aria-label="Número">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>

</br>

<div class="container">
  <div class="row">
    @foreach($registroMusicas as $registroMusicasLoop)
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src=".{{$registroMusicasLoop->image}}" class="card-img-top" alt="Capa do Álbum">
          <div class="card-body">
            <h5 class="card-title text-center fw-bolder">{{$registroMusicasLoop->nome}}</h5>
            <p class="card-text">Banda: &nbsp; {{$registroMusicasLoop->banda}}</p>
            <p class="card-text">Gênero: &nbsp; {{$registroMusicasLoop->genero}}</p>
            <p class="card-text">Valor: &nbsp; {{$registroMusicasLoop->valor}}</p>
            <audio controls>
              <source src=".{{$registroMusicasLoop->musica}}" type="audio/mp3">
            </audio>
            <div class="d-flex justify-content-evenly mt-3">
              <a href="{{route('mostrar-musicas', $registroMusicasLoop->id)}}" class="btn btn-primary">Editar</a>
              <form method="post" action="{{route('apaga-musicas', $registroMusicasLoop->id)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger"> X </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</section>

@endsection
