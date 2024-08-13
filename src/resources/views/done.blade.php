@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth/shop_detail.css') }}">
@endsection

@section('content')
  <div class="app">
    <div class="done__content">
      <div class="shop__content-message">ご予約ありがとうございます</div>
      <a class="shop__content-btn" href="/">戻る</a>
    </div>
  </div>
@endsection
