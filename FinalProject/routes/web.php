<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});


/*Routes to Category*/
Route::get( '/categories', [ CategoryController::class, 'index' ] );
Route::get( '/categories/create', [ CategoryController::class, 'create' ] );
Route::get( '/categories/edit/{id}', [ CategoryController::class, 'edit' ] );


Route::post( '/categories', [ CategoryController::class, 'store' ] );

Route::delete( '/categories/{id}', [ CategoryController::class, 'destroy' ] );

Route::put( '/categories/update/{id}', [ CategoryController::class, 'update' ] );

/*Routes to events*/
Route::get( '/events', [ EventController::class, 'index' ] );
Route::get( '/events/create', [ EventController::class, 'create' ] );
Route::get( '/events/edit/{id}', [ EventController::class, 'edit' ] );

Route::post( '/events', [ EventController::class, 'store' ] );

Route::delete( '/events/{id}', [ EventController::class, 'destroy' ] );

Route::put( '/events/update/{id}', [ EventController::class, 'update' ] );

/*Routes to Authentication */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
