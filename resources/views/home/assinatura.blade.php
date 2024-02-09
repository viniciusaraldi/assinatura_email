@extends('layouts.layoutAdmin')

@section('title', 'Assinaturas Cadastradas')
    
@section('main')

    @if ( session("succ") )
        <div>{{ session('succ') }}</div>
    @endif
    @if ( session("dest") )
        <div>{{ session('dest') }}</div>
    @endif
    @if ( session("msg") )
        <div>{{ session('msg') }}</div>
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

    <section class="assinatura">
        <div>
            <ul>
                <li>
                    <a href="{{ route('formA') }}">Criação de assinatura de Email Para colaboradores</a>
                </li>
                <li>
                    <a href="{{ route('formI') }}">Criação de imagem de empresa para assinatura de Email Para colaboradores</a>
                </li>
            </ul>
        </div>

        <div><h2>Assinaturas Criadas:</h2></div>

        <div class="assinatura__container">
            @foreach ($assinaturas as $assinatura)
                <ul class="assinatura__cards">
                    <div>
                        <h3>{{ $assinatura['colaborador'] }}</h3>
                        <h4>{{ $assinatura['funcao'] }}</h4>
                    </div>

                    <div class="assinatura__cards__opcoes">
                        <form action="{{ route('detail', $assinatura['id']) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn__opcao">Visualizar</button>
                        </form>

                        <form action="{{ route('edit', $assinatura['id']) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn__opcao">Editar</button>
                        </form>
    
                        <form method="POST" action="{{ route('destroy', $assinatura['id']) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn__opcao">Excluir</button>
                        </form>
                    </div>
                    
                </ul>
            @endforeach
        </div>
    </section>

@endsection
