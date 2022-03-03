<?php

use Illuminate\Support\Facades\Route;
// ログイン画面ルーティング用Router設定
use App\Http\Controllers\Auth\AuthController;

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

// ログイン画面表示
Route::get('/', [AuthController::class,
'showLogin'])->name('showLogin');

// ログイン処理
Route::post('login', [AuthController::class,
'login'])->name('login');