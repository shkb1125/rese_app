@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/thanks.css') }}">
@endsection

@section('content')
    {{-- 会員登録フォーム --}}
    <div class="thanks-form">
        <div class="thanks-form__inner">
          <div class="thanks-form__message">会員登録ありがとうございます</div>
            <form class="register-form__form" action="/register" method="POST">
                @csrf
                <a class="register-form__login-btn" href="/login">ログイン</a>
            </form>
        </div>
    </div>
@endsection
