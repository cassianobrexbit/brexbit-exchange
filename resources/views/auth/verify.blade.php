@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirme seu endereço de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link para verificação foi enviado no seu endereço de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifique o seu email') }}
                    {{ __('Caso não tenha recebido o email de verificação') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para solicitar um novo email.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
