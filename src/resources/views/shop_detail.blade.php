@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth/shop_all.css') }}">
@endsection

@section('content')
  <div class="app">
    <div class="shop__content">
      <form class="shop__content-list" action="">
        @foreach ($shops as $shop)
          <div class="shop-list__content">
            <img src="{{ $shop->img_url }}" alt="" class="shop-list__content-img">
            <h2 class="shop-list__content-header">{{ $shop->name }}</h2>
            <div class="shop-list__content-tag">#{{ $shop->area->name }} #{{ $shop->genre->name }}</div>
            <a class="shop-list__content-btn" href="{{ route('detail', $shop->id) }}">詳しくみる</a>
            {{-- お気に入り登録 --}}
            <div class="shop-list__content-favorite"></div>
          </div>
        @endforeach
      </form>
    </div>
  </div>
@endsection
