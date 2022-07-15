<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\NewsController;
use App\Models\News;

use Illuminate\Support\Facades\Hash;



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
    $news = news::all();
    return view('home', compact([
        'news'
    ]));
})->name('home.index')->middleware('auth');



Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store')->name('user.register');
    Route::get('/login', 'getLogin');
    Route::post('/login', 'login')->name('user.login');
    Route::get('/logout', 'logout');
});


Route::controller(GuestController::class)->group(function () {

    Route::get('/guests', 'index')->name('guest.index')->middleware('auth', 'rt');
    Route::get('/guest', 'create')->middleware('auth');
    Route::post('/guest', 'store')->name('guest.store')->middleware('auth');
});


Route::controller(FundController::class)->group(function () {
    Route::get('/funds', 'index')->middleware('auth', 'rt');
    Route::get('/fund', 'create')->middleware('auth');
    Route::post('/fund', 'store')->name('fund.store')->middleware('auth');
});

Route::controller(NewsController::class)->group(function () {
    Route::post('/news', 'store')->name('news.store')->middleware('auth', 'rt');
    Route::get('/rt', 'create')->name('home.rt')->middleware('auth', 'rt');
});


Route::get('/genpass', function() {
    return Hash::make('asdfasdf');
});

