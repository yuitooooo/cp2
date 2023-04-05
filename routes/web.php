<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CP2Controller;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::controller(CP2Controller::class)->middleware(['auth'])->group(function(){
    Route::get('/proposal','proposal')->name('proposal');
    Route::get('/','front')->name('front');
    Route::post('/proposal','proposal')->name('proposal');
    Route::post('/proposal/{post}','store')->name('store');
});

require __DIR__.'/auth.php';
