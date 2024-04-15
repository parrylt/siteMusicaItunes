@extends('layout')
@section('content')

<section class="container mt-5">

<form class="row g-3" method="POST" action="{{route('alterar-quarto',$registroQuartos ->id)}}">
@method('put')
@csrf
  <div class="col-md-12">
    <label for="inputNumeroQuarto" class="form-label">Numero: </label>
    <input type="number" class="form-control" id="inputNumero" value="{{old('numero',$registroQuartos->numero)}}" name="numero">
    @error('numero')
  <div class="text-sm-start text-light">*Preencher o campo Numero.</div>
  @enderror
  </div>

  <div class="col-md-12">
  
    <label for="inputTipo4" name="tipo" class="form-label">Tipo: </label>
    <select class="form-select" aria-label="Default select example" value="{{old('tipo',$registroQuartos->tipo)}}" name="tipo">
  <option selected disabled></option>
  <option value="Classe A+">Classe A+</option>
  <option value="Comercial">Comercial</option>
  <option value="Suite">Suite</option>
</select>
  </div>

  <div class="col-md-12">
    <label for="inputValorQuarto" class="form-label">Valor: </label>
    <input type="number" class="form-control" id="inputValor" value="{{old('valor',$registroQuartos->valor)}}" name="valor">
    @error('valor')
  <div class="text-sm-start text-light">*Preencher o campo Valor.</div>
  @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>

@endsection()