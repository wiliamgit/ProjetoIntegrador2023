@if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
    <script>
 // Adicione um temporizador para ocultar a mensagem após 5 segundos (5000 milissegundos)
      setTimeout(function() {
          var successMessage = document.getElementById('success-message');
          successMessage.style.display = 'none';
      }, 5000); // 5000 ms = 5 segundos
  </script>
@endif
@extends('padraoauth')
@section('site_auth')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<table class="table">
  <h1> Listar Produto</h1>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Produto</th>
        <th scope="col">Descrição</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)       
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome_cd  }}</td>
            <td>{{ $produto->descricao_cd }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->tipo }}</td>
            <td>{{ $produto->data }}</td>
            <td> 
              {{-- Delete --}}
                <form action="{{ route('/produto/{id}', $produto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            {{-- Editar --}}
          <td>
            <form action="{{ route('Tela-produto-atualizar', $produto->id)}}">
              <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            </td>
          </tr>
          @endforeach
    </tbody>
  </table>
 @endsection