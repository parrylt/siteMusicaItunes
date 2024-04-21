<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EtecTunes</title>
    <link rel="icon" href="assets/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar absolute-top navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand">Página da Administração</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin-home">Home</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Músicas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('show-cadastro-musicas')}}">Cadastrar</a></li>
            <li><a class="dropdown-item" href="{{route('gerenciar-musicas')}}">Gerenciar</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('gerenciar-usuario')}}">Gerenciar</a></li>
        </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('showFormulario-cadastro')}}">Cadastro</a></li>
            <li><a class="dropdown-item" href="{{'/gerenciarCliente'}}">Gerenciar</a></li>
        </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{'/cadastroFuncionarios'}}">Cadastro</a></li>
            <li><a class="dropdown-item" href="{{'/gerenciarFunci'}}">Gerenciar</a></li>
        </ul>
        </li>

      </ul>
      
      <form class="form-inline my-2 my-lg-0">
      <li class="nav-item dropdown d-flex justify-content-end" title="ver perfil">
          <a class="nav-link dropdown-item" href="{{route('profile.edit')}}">
          {{ Auth::user()->name }}
          </a>
        </li>

    </form>

    </div>
  </div>
</nav>
    </header>
    <br><br>

    <main>
        @yield('content')
    </main>

    <footer>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>