@extends('layout')
@section('content')
<form method="POST" action="{{route('envia-banco-musica')}}">
@csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nome">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Genero:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="genero">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Valor:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="valor">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">cadastrar</button>
</form>
@endsection()