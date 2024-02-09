@extends('layouts.layoutAdmin')
@section('title', 'Detalhamento da Assinatura')
    
@section('main')
@if ( session("succ") )
    <div>{{ session('succ') }}</div>
@endif

    @auth
    <div class="auth">
        <h1>Bem vindo de volta, {{ auth()->user()->name }}</h1>
    </div>
    <div>
        <a href="{{ route('formL') }}">Login</a>
        <form action="/client/logout" method="POST">
            @csrf
            <button type="submit" class="logout">Sair</button>
        </form>
    </div>
    @endauth

    @if ($assinatura->empresa === 1)
    <div class="container__detail__assinatura">
        <button id="downloadoAssinatura">
            <div class="box__assinatura__show">
                @if ($imagem->imagem)
                    <img class="imagem__detail__assinatura" src="{{ asset('imagens/empresas/assinaturas/' . $imagem->imagem) }}" />
                @endif
                <div class="colaborador__info__assinatura{{ strval($assinatura->empresa) }}">
                    <h1 id="colaborador__assinatura">{{ $assinatura->colaborador }}</h1>
                    <h2 id="funcao__assinatura">{{ $assinatura->funcao }}</h2>
                    <h2 id="telefone__assinatura">{{ $assinatura->telefone }}</h2>
                    <h3 id="celular__assinatura">{{ $assinatura->celular }}</h3>
                    <h3 class="endereco__rua">R. Gregorio Diegolini,</h3>
                    <h3 class="endereco__numero">125 - São Luiz</h3>
                    {{-- <h4>{{ $assinatura->empresa }}</h4> --}}
                </div>
            </div>
        </button>
    </div>
    @endif

    @if ($assinatura->empresa === 2)
    <div class="container__detail__assinatura">
        <button id="downloadoAssinatura">
            <div class="box__assinatura__show">
                @if ($imagem->imagem)
                    <img class="imagem__detail__assinatura" src="{{ asset('imagens/empresas/assinaturas/' . $imagem->imagem) }}" />
                @endif
                <div class="colaborador__info__assinatura{{ strval($assinatura->empresa) }}">
                    <h1 id="colaborador__assinatura">{{ $assinatura->colaborador }}</h1>
                    <h2 id="funcao__assinatura">{{ $assinatura->funcao }}</h2>
                    <h2 id="telefone__assinatura">{{ $assinatura->telefone }}</h2>
                    <h3 id="celular__assinatura">{{ $assinatura->celular }}</h3>
                    <h3 class="endereco__rua">R. Gregorio Diegolini,</h3>
                    <h3 class="endereco__numero">125 - São Luiz</h3>
                    {{-- <h4>{{ $assinatura->empresa }}</h4> --}}
                </div>
            </div>
        </button>
    </div>
    @endif

    @if ($assinatura->empresa === 3)
    <div class="container__detail__assinatura">
        <button id="downloadoAssinatura">
            <div class="box__assinatura__show">
                @if ($imagem->imagem)
                    <img class="imagem__detail__assinatura" src="{{ asset('imagens/empresas/assinaturas/' . $imagem->imagem) }}" />
                @endif
                <div class="colaborador__info__assinatura{{ strval($assinatura->empresa) }}">
                    <h1 id="colaborador__assinatura">{{ $assinatura->colaborador }}</h1>
                    <h2 id="funcao__assinatura">{{ $assinatura->funcao }}</h2>
                    <h2 id="telefone__assinatura">{{ $assinatura->telefone }}</h2>
                    <h3 id="celular__assinatura">{{ $assinatura->celular }}</h3>
                    <h3 class="endereco__rua">R. Gregorio Diegolini,</h3>
                    <h3 class="endereco__numero">125 - São Luiz</h3>
                    {{-- <h4>{{ $assinatura->empresa }}</h4> --}}
                </div>
            </div>
        </button>
    </div>
    @endif

@endsection