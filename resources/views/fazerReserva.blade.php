@extends('layout')
@section('content')

<section class="container mt-5">
  <h1>Reserva de Quarto</h1>

<form class="row g-3" method="POST" action="{{route('envia-banco-reserva')}}">
@csrf
  <div class="col-md-3">
    <label for="inputCodigoFuncionario" class="form-label">Digite o Codigo do Funcionario: </label>
    <input type="text" class="form-control" id="inputCodigoFuncionario" name="idfuncionario">
  </div>

  <div class="col-md-9">
    <label for="inputNomeFuncionario" class="form-label">Nome Funcionario: </label>
    <input type="text" class="form-control" id="inputNomeFuncionario" name="nomeFuncionario">
  </div>

  <div class="col-md-3">
    <label for="inputCodigoCliente" class="form-label">Digite o Codigo do Cliente: </label>
    <input type="number" class="form-control" id="inputCodigoCliente" name="idcliente">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Nome Cliente: </label>
    <input type="text" class="form-control" id="inputNomeCliente" name="nomeCliente">
  </div>


  <div class="col-md-3">
    <label for="inputCodigoQuarto" class="form-label">Digite o Codigo do Quarto: </label>
    <input type="number" class="form-control" id="inputCodigoQuarto" name="idquarto">
  </div>

  <div class="col-md-3">
    <label for="inputTipoQuarto" class="form-label">Tipo: </label>
    <input type="text" class="form-control" id="inputTipoQuarto" name="tipoQuarto">
  </div>

  <div class="col-md-3">
    <label for="inputValor" class="form-label">Valor da Diaria: </label>
    <input type="number" class="form-control" id="inputValor" name="valordiaria">
  </div>

  <div class="col-md-3">
    <label for="inputValor4" class="form-label">Data Entrada: </label>
    <input type="date" class="form-control" id="inputdataentrada" name="dataEntrada" >
  </div>

  <div class="col-md-3">
    <label for="inputValor4" class="form-label">Data Saida: </label>
    <input type="date" class="form-control" id="inputdatasaida" name="dataSaida">
  </div>

  <div class="input-group mb-3">
  <label for="inputValorTotal" class="form-label">Valor Total: </label>
  <br>
  <span class="input-group-text">R$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="inputvalorTotal" name="valortotal">
  <span class="input-group-text">.00</span>
  </div>

  <div class="col-md-12">
  <label for="inputSituacaoPagamento" class="form-label">Situacao do pagamento: </label>
      <select class="form-select" aria-label="Default select example" name="situacao">
  <option selected value="Pendente">Pendente</option>
  <option value="Pago">Pago</option>
</select>
  </div>
  
  
  
  <div class="col-3">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection()