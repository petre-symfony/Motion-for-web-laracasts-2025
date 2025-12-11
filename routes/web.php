<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'intro');
Route::view('/css-transitions', 'css-transitions');
Route::view('/transition-behaviour', 'transition-behaviour');
Route::view('/keyframes', 'keyframes');
Route::view('/path', 'path');
Route::view('/timeline', 'timeline');