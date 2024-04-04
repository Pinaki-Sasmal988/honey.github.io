<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
// Route::get('/home', function () {
//     return view('customer.home');
// });

// Customer Side
Route::get('customer/home',[CustomerController::class,'home'])->name('home');
Route::get('customer/about',[CustomerController::class,'aboutUs'])->name('about');
Route::get('customer/contact',[CustomerController::class,'contact'])->name('contact');
Route::get('customer/order',[CustomerController::class,'order'])->name('order');
Route::get('customer/addToCard',[CustomerController::class,'addToCard'])->name('addToCard');
