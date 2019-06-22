@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

  <h4><a href="{{ url('buy_cryptos/create') }}" class="btn btn-primary pull-left btn-sm">Nova Compra</a></h4>

  <br>
  <table class="table table-bordered table-striped table-hover" id="tblbuys">
    <thead>
        <tr>
          <th>Criptomoeda</th><th>Valor em R$</th><th>Valor em Criptomoeda</th><th>Data de Registro</th><th>Status</th><th>Detalhes</th>
        </tr>
    </thead>
    <tbody>
      @foreach($buys as $item)
          <tr>
            <td>{{ $item->crypto_name }}</td>
            <td>{{ $item->brl_value }}</td>
            <td>{{ $item->crypto_value }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->status }}</td>
            <td><a href="{{ url('buy_cryptos',  $item->id) }}">Detalhes</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
      $('#tblbuys').DataTable({
          columnDefs: [{
              targets: [0],
              visible: false,
              searchable: false
              },
          ],
          order: [[0, "asc"]],
      });
  });
</script>
@endsection
