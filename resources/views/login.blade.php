

@if(session()->has('error'))
<span class="alert alert-danger">{{session('error')}}</span>
@endif

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
  {{-- Rota --}}
  <form  class="p-4 p-md-10 bg-light" method="POST" action="{{route('loginUser')}}">
   @csrf
    {{-- Email--}}
  <div class="mb-3">
    <label for="inputName" class="form-label">Digitar sua Email</label>
    <input type="text" class="form-control col-md-4" name="email" value="{{old('email')}}">
    <div id="emailHelp" class="form-text"></div>
    @error('email')
    <div class="text-danger">* Preencher o campo Email.</div>
     @enderror
    {{-- Senha --}}
  </div>
  <div class="mb-3">
    <label for="inputName" class="form-label">Digite sua Senha</label>
    <input type="password" class="form-control col-md-6" name="password" value="{{old('password')}}">
    <div id="emailHelp" class="form-text"></div>
    @error('password')
    <div class="text-danger">* Preencher o campo Senha.</div>
     @enderror
  </div>
  {{-- Botao Cadastrar --}}
  <div class="d-flex justify-content-between align-items-center">
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

