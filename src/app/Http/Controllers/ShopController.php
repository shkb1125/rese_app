<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Favorite;
use App\Models\Genre;
use App\Models\Reservation;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    protected $shop;

    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    public function index()
    {
        $shops = $this->shop->with(['area', 'genre'])->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('shop_all', compact('shops', 'areas', 'genres'));
    }

    public function favorite(Request $request)
    {
        Favorite::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->input('shop_id'),
        ]);

        return redirect()->back();
    }

    public function detail($shop_id)
    {
        $shop = $this->shop->with(['area', 'genre'])->findOrFail($shop_id);
        $areas = Area::all();
        $genres = Genre::all();

        $start_time = '10:00';
        $end_time = '21:00';

        $time_slots = [];
        $current_time = strtotime($start_time);
        $end_time = strtotime($end_time);

        while ($current_time <= $end_time) {
            $time_slots[] = date('H:i', $current_time);
            $current_time = strtotime('+30 minutes', $current_time);
        }

        $people_options = range(1, 10);

        return view('shop_detail', compact('shop', 'areas', 'genres', 'time_slots', 'people_options'));
    }

    public function done(Request $request)
    {
        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->input('shop_id'),
            'reservation_date' => $request->input('reservation_date') . ' ' . $request->input('reservation_time'),
            'number_of_people' => $request->input('reservation_people'),
        ]);

        return view('done', compact('reservation'));
    }

    public function mypage()
    {
        $user_id = Auth::id();
        $reservations = Reservation::where('user_id', $user_id)->with('shop')->get();

        foreach ($reservations as $reservation) {
            // 日付をフォーマット
            $reservation->formatted_date = Carbon::parse($reservation->reservation_date)->format('Y-m-d');
            // 時間をフォーマット
            $reservation->formatted_time = Carbon::parse($reservation->reservation_date)->format('H:i');
        }

        $shops = $this->shop->with(['area', 'genre'])->get();

        return view('my_page', compact('reservations', 'shops'));
    }
}
