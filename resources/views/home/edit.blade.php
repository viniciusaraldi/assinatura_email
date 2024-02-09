@extends('layouts.layoutAdmin')
@section('title', 'titulo')
    
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

    <div class="container__detail__assinatura">
        <form action="{{ route('update', $assinatura->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="colaborador">
                <input type="text" name="colaborador" id="colaborador" placeholder="Altere o nome do colaborador" value="{{ $assinatura->colaborador }}">
            </label>
            <label for="funcao">
                <input type="text" name="funcao" id="funcao" placeholder="Altere o nome do funcao" value="{{ $assinatura->funcao }}">
            </label>
            <label for="telefone">
                <input type="text" name="telefone" id="telefone" placeholder="Altere o nome do telefone" value="{{ $assinatura->telefone }}">
            </label>
            <label for="celular">
                <input type="text" name="celular" id="celular" placeholder="Altere o nome do celular" value="{{ $assinatura->celular }}">
            </label>
            <label for="empresa">
                <input type="text" name="empresa" id="empresa" placeholder="Altere o nome do empresa" value="{{ $assinatura->empresa }}">
            </label>
            <button type="submit">Atualizar</button>
        </form>
    </div>

@endsection
