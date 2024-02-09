@extends('layouts.layoutAdmin')

@section('title', 'Assinatura de email')
    
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

    <section class="formularioAssinatura">
        <form action="{{ route('createAssinatura') }}" method="POST">
            @csrf
            <label for="colaborador">
                <input type="colaborador" placeholder="colaborador" name="colaborador" id="colaborador"/>
            </label>
            <label for="funcao">
                <input type="funcao" placeholder="funcao" name="funcao" id="funcao" />
            </label>
            <label for="telefone">
                <input type="telefone" placeholder="telefone" name="telefone" id="telefone" />
            </label>
            <label for="celular">
                <input type="celular" placeholder="celular" name="celular" id="celular" />
            </label>
            <label for="empresa">
                <input type="empresa" placeholder="empresa" name="empresa" id="empresa" />
            </label>
    
            <button type="submit">submit</button>
        </form>

    </section>

@endsection
