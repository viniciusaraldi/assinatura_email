@extends('layouts.layoutAdmin')
@section('title', 'Area Inicial do Colaborador')
    
@section('main')

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

    <section class="activites">
        <div class="box__titulo">
            <h2>O que vamos fazer hoje?</h2>
        </div>
        <div class="box__activites">
            <ul>
                <li><a href="{{ route('assinatura') }}">Assinatura de Email Para colaboradores</a></li>
            </ul>
        </div>
    </section>


@endsection