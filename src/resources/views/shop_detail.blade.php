@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth/shop_detail.css') }}">
@endsection

@section('content')
  <div class="app">
    <div class="shop__content">
      <h2 class="shop__content-header">{{ $shop->name }}</h2>
      <img src="{{ $shop->img_url }}" alt="" class="shop-list__content-img">
      <div class="shop__content-tag">#{{ $shop->area->name }} #{{ $shop->genre->name }}</div>
      <div class="shop__content-overview">{{ $shop->overview }} #{{ $shop->genre->name }}</div>
    </div>
    <form action="/done" method="POST">
      @csrf
      <input type="hidden" name="shop_id" value="{{ $shop->id }}">
      <div class="shop__reservation">
        <h3 class="shop__reservation-header">予約</h3>
        <input type="date" class="shop__reservation-calendar" name="reservation_date" value="{{ date('Y-m-d') }}"
          min="{{ date('Y-m-d') }}">
        <select name="reservation_time" class="shop__reservation-time">
          @foreach ($time_slots as $time)
            <option value="{{ $time }}">{{ $time }}</option>
          @endforeach
        </select>
        <select name="reservation_people" class="shop__reservation-people">
          @foreach ($people_options as $people)
            <option value="{{ $people }}">{{ $people }}人</option>
          @endforeach
        </select>
        <input class="shop__reservation-btn" type="submit" value="予約する">
      </div>
    </form>
  </div>
@endsection
