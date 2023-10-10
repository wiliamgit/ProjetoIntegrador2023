
<div class="container min-vh-100 d-flex justify-content-center align-items-center"> 

  <form class=" p-4 p-md-10 bg-light " method="POST" action="{{route('regisStore')}} " >
    @csrf
    {{-- Nome --}}
  <div class="mb-3">
    <label for="inputName" class="form-label">Digitar seu Nome</label>
    <input type="text" class="form-control col-md-4" name="name" value="{{old('name')}}">
    <div id="emailHelp" class="form-text"></div>
    {{-- Email --}}
  </div>
  <div class="mb-3">
    <label for="inputName" class="form-label">Digitar seu email</label>
    <input type="email" class="form-control col-md-6" name="email" value="{{old('email')}}">
    <div id="emailHelp" class="form-text"></div>
  </div>
  {{-- Senha --}}
  <div class="mb-3">
    <label for="inputName" class="form-label">Digitar sua senha</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    <div id="emailHelp" class="form-text"></div>
  </div>
  {{-- Botao Cadastrar --}}
  <div class="d-flex justify-content-between align-items-center">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    {{-- Fazer Login --}}
    <a href="{{ route('loginIndex') }}" class="btn btn-link text-underline">Login</a>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


