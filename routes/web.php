<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CP2Controller;
use Illuminate\Http\Request;




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

Route::controller(CP2Controller::class)->group(function(){
    Route::get('/cp2/proposal','proposal')->name('proposal');
    Route::get('/cp2/front','front')->name('front');
    Route::post('/cp2/proposal','proposal')->name('proposal');
    Route::post('/cp2/proposal/{post}','store')->name('store');
});