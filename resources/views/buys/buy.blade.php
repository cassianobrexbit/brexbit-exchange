@extends('layouts.app')
@section('title')
Compra
@stop

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Dados compra</div>
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th> Criptomoeda</th>
                    <td> {{ $buy->crypto_name }} </td>
                </tr>
                <tr>
                    <th>Valor em criptomoeda</th>
                    <td>  {{ $buy->crypto_value }} </td>
                </tr>
                <tr>
                    <th>Valor em R$</th>
                    <td> {{ $buy->brl_value }} </td>
                </tr>
                <tr>
                    <th>Cotação</th>
                    <td> {{ $buy->crypto_rate }} </td>
                </tr>
                <tr>
                  <th>Endereço criptomoeda</th>
                    <td><a href='https://live.blockcypher.com/btc/address/{{$buy->crypto_address}}' target="_blank">{{ $buy->crypto_address}}</a></td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td>{{$buy->status }}
                </tr>
                <tr>
                  <th>Data de confirmação</th>
                  <td>{{$buy->confirmation_time  }}
                </tr>
                <tr>
                  <th>Comprovante de depósito</th>
                  <td><a href="{{action('BuyCryptoController@getFile', $buy->id)}}">Comprovante</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
