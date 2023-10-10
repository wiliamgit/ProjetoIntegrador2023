@extends('padraoauth')
@section('site_auth')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h1 class= "col-md-6 offset-md-3" class= "dangertext-" > Cadastro de Produtos</h1>
<div class="col-md-6 offset-md-3" >
<form class="row g-3" method="POST" action="{{route('cadastrarProduto')}}">
  @csrf
  {{-- Nome --}}
  <div class="mb-3">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" name = "nome_cd" value = "{{old('nome_cd')}}" >
    @error('nome_cd')
    <div class="text-danger">* Preencher o campo Nome.</div>
     @enderror
   </div>
   {{-- Baarra --}}
  <div class="mb-3">
    <label for="InputCodigo" class="form-label">Codigo de Barra</label>
    <input type="text" class="form-control" name = "codigo_barras" value = "{{old('codigo_barras')}}">
    @error('codigo_barras')
    <div class="text-danger">* Preencher o campo Codigo de barra</div>
     @enderror
  </div>
  {{-- imagem --}}
  {{-- <div class="mb-3">
    <label for="InputCategoria" class="form-label">foto</label>
    <input type="text" class="form-control" name = "foto_cd" value = "{{old('foto_cd')}}">
    @error('')
    <div class="text-danger">* Preencher o campo foto</div>
     @enderror
  </div> --}}
  {{-- Quantidade --}}
  <div class="mb-3">
    <label for="InputCategoria" class="form-label">Quantidade</label>
    <input type="text" class="form-control" name = "quantidade" value = "{{old('quantidade')}}">
    @error('quantidade')
    <div class="text-danger">{{ $message }}</div>
     @enderror
  </div>
  {{-- Tipo --}}

  <div class="mb-3">
    <label for="tipo">Tipo de Movimentação</label>
    <select name="tipo" id="tipo" class="form-select">
        <option value={{('entrada')}}>Entrada</option>
        <option value={{('saida')}}>Saida</option>
    </select>
</div>
     {{-- Data --}}
  <div class="mb-3">
    <label for="InputDescricao" class="form-label">Data</label>
    <input type="date" class="form-control" name = "data" value = "{{old('data')}}">
    @error('data')
    <div class="text-danger">* Preencher o campo foto</div>
     @enderror
  </div>
  
  {{-- Descrição --}}
  <div class="mb-3">
    <label for="InputDescricao" class="form-label">Descrição</label>
    <input type="text" class="form-control" name = "descricao_cd" value = "{{old('descricao_cd')}}">
    @error('descricao_cd')
    <div class="text-danger">* Preencher Campo</div>
     @enderror
  </div>
  <button type="submit" class="btn btn-secondary">Cadastrar</button>
</form>
</div>

    
@endsection