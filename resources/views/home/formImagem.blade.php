@extends('layouts.layoutAdmin')

@section('title', 'titulo')
    
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

    <section class="assinatura">

        <form action="{{ route('createImagem') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="imagem">
                <input type="file" placeholder="imagem" name="imagem" id="imagem"/>
            </label>
            <label for="empresa">
                <input type="empresa" placeholder="empresa" name="empresa" id="empresa" />
            </label>
    
            <button type="submit">Cadastrar</button>
        </form>

    </section>

@endsection
