@extends('layouts.layoutAdmin')

@section('title', 'Formulário de Login')

@section('main')
    <div class="container__form">
        @if($errors->all())
        <ul class="danger_errors">
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
        @endif

        @if (Auth::check())
           <h1>Você ainda está conectado, {{ auth()->user()->name }}</h1>
           <a href="{{ route('dashboard') }}">Entre nessa seção para poder ir até ate inicial</a> 
        @endif
        
        <form action="{{ route('login') }}" method="POST" class="form__login">
            @csrf
            <div class="form__login__user">
                <label for="name">Nome
                    <input type="name" placeholder="name" name="name" id="name" value="{{ session('user.name') != '' ? session('user.name') : '' }}"/>
                </label>
                <label for="email">Email
                    <input type="email" placeholder="email" name="email" id="email" value="{{ session('user.email') != '' ? session('user.email') : '' }}" />
                </label>
                <label for="password">Senha
                    <input type="password" placeholder="password" name="password" id="password" />
                </label>
        
            </div>
            <div class="form__login__action">
                <button type="submit" class="login">Entrar</button>
                <a href="{{ route('formR') }}" class="form__register">Registre-se</a>
            </div>

    
        </form>

    </div>
   
@endsection
    
