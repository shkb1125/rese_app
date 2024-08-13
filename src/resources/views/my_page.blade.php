@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/auth/my_page.css') }}">
@endsection

@section('content')
  <div class="mypage">
    <div class="mypage-information">
      <div class="mypage-information__header">
        予約状況
      </div>
      <div class="mypage-information__content">
        <div class="mypage-information__content-item">予約</div>

        <table>
          <tr>
            <th>Shop</th>
            <th>Date</th>
            <th>Time</th>
            <th>Number</th>
          </tr>
          @foreach ($reservations as $reservation)
            <tr>
              <td>{{ $reservation->shop->name }}</td>
              <td>{{ $reservation->formatted_date }}</td>
              <td>{{ $reservation->formatted_time }}</td>
              <td>{{ $reservation->number_of_people }}</td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="mypage-reservations">
      <div class="mypage-reservations__name">○○さん</div>
      <div class="mypage-reservations__header">お気に入り店舗</div>
      <div class="mypage-reservations__content">
        <form class="shop__content-list" action="{{ route('favorite') }}" method="post">
          @csrf
          @foreach ($shops as $shop)
            <div class="shop-list__content">
              <img src="{{ $shop->img_url }}" alt="" class="shop-list__content-img">
              <h2 class="shop-list__content-header">{{ $shop->name }}</h2>
              <div class="shop-list__content-tag">#{{ $shop->area->name }} #{{ $shop->genre->name }}</div>
              <a class="shop-list__content-btn" href="{{ route('detail', $shop->id) }}">詳しくみる</a>
              <input type="hidden" name="shop_id" value="{{ $shop->id }}">
              <button type="submit" class="shop-list__content-favorite">♡</button>
            </div>
          @endforeach
        </form>
      </div>
    </div>

  </div>
@endsection
