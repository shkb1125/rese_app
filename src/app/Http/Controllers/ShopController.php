<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Genre;
use App\Models\Shop;
use Illuminate\Http\Request;

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

    public function detail()
    {
        $shops = $this->shop->with(['area', 'genre'])->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('shop_detail', compact('shops', 'areas', 'genres'));
    }
}
