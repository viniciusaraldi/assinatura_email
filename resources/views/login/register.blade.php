@extends('layouts.layoutAdmin')

@section('title', 'Registre-se na plataforma')

@section('main')
    <div class="container__form">
        <form action="{{ route('register') }}" method="POST" class="form__login">
            @csrf
            <div class="form__login__action">
                <label for="name">
                    <input type="name" placeholder="name" name="name" id="name" />
                </label>
                <label for="email">
                    <input type="email" placeholder="email" name="email" id="email" />
                </label>
                <label for="password">
                <input type="password" placeholder="password" name="password" id="password" />
                </label>
                <button type="submit" class="login">submit</button>
            </div>
        </form>
    </div>
@endsection()