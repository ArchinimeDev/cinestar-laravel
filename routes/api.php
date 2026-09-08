<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CinestarController;

Route::controller(CinestarController::class)->group(function() {
    Route::get('cines', 'cines');
});