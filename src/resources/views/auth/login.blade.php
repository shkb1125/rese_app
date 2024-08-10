@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
    <div class="login-form">
        <h2 class="login-form__heading content__heading">Login</h2>
        <div class="login-form__inner">
            <form class="login-form__form" action="/login" method="POST">
                @csrf
                <div class="login-form__group">
                    <input class="login-form__input" type="mail" name="email" placeholder="メールアドレス">
                    <p class="login-form__error-message">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="login-form__group">
                    <input class="login-form__input" type="password" name="password" placeholder="パスワード">
                    <p class="login-form__error-message">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="login-form__btn btn" type="submit" value="ログイン">
            </form>
            <div class="login-form__register">
            </div>
        </div>
    </div>
@endsection
