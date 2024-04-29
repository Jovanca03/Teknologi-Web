<?php

use Illuminate\Support\Facades\Route;


Route::get('/mypage', function () {
    return view('mypage');
});


Route::get('/', function () {
    return view('welcome');
});
