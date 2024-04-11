<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;


Route::resource('comic', ComicController::class);

