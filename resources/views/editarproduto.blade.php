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

<h1 class= "col-md-6 offset-md-3" class= "dangertext-" > Editar Produto</h1>
<div class="col-md-6 offset-md-3" >
<form class="row g-3" method="POST" action="{{route('produto_atualizar',$produto->id)}}">
  @method('put')
  @csrf
  {{-- Nome --}}
  <div class="mb-3">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" name = "nome_cd" value = "{{old('nome_cd', $produto->nome_cd)}}" >
    @error('nome_cd')
    <div class="text-danger">* Preencher o campo Nome.</div>
     @enderror
   </div>
   {{-- Baarra --}}
  <div class="mb-3">
    <label for="InputCodigo" class="form-label">Codigo de Barra</label>
    <input type="text" class="form-control" name = "codigo_barras" value = "{{old('codigo_barras', $produto->codigo_barras)}}">
    @error('codigo_barras')
    <div class="text-danger">* Preencher o campo Codigo de barra</div>
     @enderror
  </div>
  <div class="mb-3">
    <label for="InputCategoria" class="form-label">Quantidade</label>
    <input type="text" class="form-control" name = "quantidade" value = "{{old('quantidade', $produto->quantidade)}}">
    @error('quantidade')
    <div class="text-danger">{{ $message }}</div>
     @enderror
  </div>
  {{-- Tipo --}}
  <div class="mb-3">
    <label for="tipo">Tipo de Movimentação</label>
    <select name="tipo" id="tipo" class="form-select">
        <option value="entrada" {{ old('tipo', $produto->tipo) == 'entrada' ? 'selected' : '' }}>Entrada</option>
        <option value="saida" {{ old('tipo', $produto->tipo) == 'saida' ? 'selected' : '' }}>Saída</option>
    </select>
</div>
     {{-- Data --}}
  <div class="mb-3">
    <label for="InputDescricao" class="form-label">Data</label>
    <input type="date" class="form-control" name = "data" value = "{{old('data', $produto->data)}}">
    @error('data')
    <div class="text-danger">* Preencher o campo foto</div>
     @enderror
  </div>
  
  {{-- Descrição --}}
  <div class="mb-3">
    <label for="InputDescricao" class="form-label">Descrição</label>
    <input type="text" class="form-control" name = "descricao_cd" value = "{{old('descricao_cd', $produto->descricao_cd)}}">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
@endsection