@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
    {{-- 会員登録フォーム --}}
    <div class="register-form">
        <h2 class="register-form__heading content__heading">Registration</h2>
        <div class="register-form__inner">
            <form class="register-form__form" action="/register" method="POST">
                @csrf
                <div class="register-form__group">
                    <input class="register-form__input" type="text" name="name" placeholder="Username">
                    <p class="register-form__error-message">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__group">
                    <input class="register-form__input" type="mail" name="email" placeholder="Email">
                    <p class="register-form__error-message">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__group">
                    <input class="register-form__input" type="password" name="password" placeholder="Password">
                    <p class="register-form__error-message">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="register-form__btn btn" type="submit" value="会員登録">
            </form>
        </div>
    </div>
@endsection
