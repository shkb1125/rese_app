@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth/shop_all.css') }}">
@endsection

@section('content')
  <div class="app">
    <nav>
      <ul>
        <li>
          <select class="header__search-select" name="area" value="{{ request('') }}">
            <option disabled selected>All area</option>
            @foreach ($areas as $area)
              <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
          </select>
          <select class="search-form__gender-select" name="gender" value="{{ request('') }}">
            <option disabled selected>All genre</option>
            @foreach ($genres as $genre)
              <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
          </select>
          {{-- 検索フォーム --}}
          <input class="search-form__keyword-input" type="text" name="keyword" placeholder="Search..."
            value="{{ request('keyword') }}">
        </li>
      </ul>
    </nav>
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
