<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

/*Routes to events*/
Route::get( '/events', [ EventController::class, 'index' ] );


