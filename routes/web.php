<?php

use App\Models\Items;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['items'=>Items::all()]);
});

Route::get('/itemdetails', function () {
return view('itemdetails');
});
Route::get('/contact', function () {
return view('contact');
});
Route::get('/card', function () {
return view('card');
});Route::get('/about', function () {
return view('about');
});
