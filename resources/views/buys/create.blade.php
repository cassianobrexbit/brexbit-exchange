@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comprar') }}</div>

                <div class="card-body">
                  {!! Form::open(['url' => 'buy_cryptos', 'class' => 'form-horizontal', 'method'=>'POST','files'=>'true', 'id'=>'createbuy']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="crypto_name" class="col-md-4 col-form-label text-md-right">{{ __('Criptomoeda') }}</label>

                            <div class="col-md-6">
                                <input id="crypto_name" type="text" class="form-control @error('crypto_name') is-invalid @enderror" name="crypto_name" value="{{ old('crypto_name') }}" required autocomplete="crypto_name" autofocus>

                                @error('crypto_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="crypto_value" class="col-md-4 col-form-label text-md-right">{{ __('Valor em criptomoeda') }}</label>

                            <div class="col-md-6">
                                <input id="crypto_value" type="text" class="form-control @error('crypto_value') is-invalid @enderror" name="crypto_value" value="{{ old('crypto_value') }}" required autocomplete="crypto_value" autofocus>

                                @error('crypto_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="crypto_rate" class="col-md-4 col-form-label text-md-right">{{ __('Cotação') }}</label>

                            <div class="col-md-6">
                                <input id="crypto_rate" type="text" class="form-control @error('crypto_rate') is-invalid @enderror" name="crypto_rate" value="{{ old('crypto_rate') }}" required autocomplete="crypto_rate" autofocus>

                                @error('crypto_rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brl_value" class="col-md-4 col-form-label text-md-right">{{ __('Valor em reais') }}</label>

                            <div class="col-md-6">
                                <input id="brl_value" type="text" class="form-control @error('brl_value') is-invalid @enderror" name="brl_value" value="{{ old('brl_value') }}" required autocomplete="brl_value" autofocus>

                                @error('brl_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="crypto_address" class="col-md-4 col-form-label text-md-right">{{ __('Endereço para envio de criptomoeda') }}</label>

                            <div class="col-md-6">
                                <input id="crypto_address" type="text" class="form-control @error('crypto_address') is-invalid @enderror" name="crypto_address" value="{{ old('crypto_address') }}" required autocomplete="crypto_address" autofocus>

                                @error('crypto_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filename" class="col-md-4 col-form-label text-md-right">{{ __('Comprovante de depósito') }}</label>

                            <div class="col-md-6">
                              {!! Form::file('filename', array('class' => 'filestyle')) !!}

                                @error('crypto_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar Compra') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
