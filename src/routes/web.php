<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::post('/', [ShopController::class, 'favorite'])->name('favorite');
    Route::get('/mypage', [ShopController::class, 'mypage']);
    Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('detail');
    Route::post('/done', [ShopController::class, 'done']);
});

// 会員登録・ログイン機能
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/thanks', [RegisterController::class, 'thanks'])->name('thanks');