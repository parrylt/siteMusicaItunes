@extends('admin/layoutAdmin')
@section('content')
<section class="container ">
  <div class="container">
    <h1 class="text">Gerenciar Dados da Musica</h1>
    </br>
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

</br>

  <table class="table">

    <tbody>
     
    @foreach($registroMusicas as $registroMusicasLoop)


      <tr>
      <div class="d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="{{$registroMusicasLoop->image}}" class="card-img-top" alt="Capa do Álbum">
        <div class="card-body">
          
          <h5 class="card-title text-center fw-bolder">{{$registroMusicasLoop->nome}}</h5>
            </br>
            <p class="card-text">Genero: &nbsp; {{$registroMusicasLoop->banda}}</p>
          <p class="card-text">Genero: &nbsp; {{$registroMusicasLoop->genero}}</p>
          <p class="card-text ">Valor: &nbsp; {{$registroMusicasLoop->valor}}</p>
          
          <div class="d-flex justify-content-evenly">
          <a href="{{route('mostrar-musicas', $registroMusicasLoop->id)}}" class="btn btn-primary ">Editar</a>
          <form method="post" action="{{route('apaga-musicas', $registroMusicasLoop->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"> X </button>
  
          </div>
        </form>
        </div>
      </div>

      </div>

      </br>

</div>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection