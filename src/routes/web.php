<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::middleware(['auth'])->group(function () {
//     Route::get('/', [ShopController::class, 'index']);
//     Route::get('/mypage', [UserController::class, 'mypage']);
//     Route::get('/detail/:shop_id', [ShopController::class, 'detail'];
//     Route::post('/done', [ShopController::class, 'done']);
// });


// 会員登録・ログイン機能
Route::get('/register', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/thanks', [RegisterController::class, 'thanks'])->name('thanks');