<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Auth;
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
    return view('front.beranda');
});
Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('home');
});

Route::get('/hello-world', function () {
    return "Hello World";
});