<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParcipantsController;


Route::get('/', [EventController::class, 'home']);

Route::get('/about', function () {return view('about');});

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
Route::get( '/events/{id}', [ EventController::class, 'show' ] );

Route::post( '/events', [ EventController::class, 'store' ] );

Route::delete( '/events/{id}', [ EventController::class, 'destroy' ] );

Route::put( '/events/update/{id}', [ EventController::class, 'update' ] );

/*Routes do Participants*/
Route::get('/participants', [ ParcipantsController::class, 'index']);
Route::get( '/participants/create', [ ParcipantsController::class, 'create' ] );
Route::get( '/participants/edit/{id}', [ ParcipantsController::class, 'edit' ] );

Route::post( '/participants', [ ParcipantsController::class, 'store' ] );

Route::delete( '/participants/{id}', [ ParcipantsController::class, 'destroy' ] );

Route::put( '/participants/update/{id}', [ ParcipantsController::class, 'update' ] );

/*Routes to Authentication */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])/*->group(function () {
        Route::get('/dashboard', function () {
            return view('Welcome');
        })->name('Welcome');
    });*/
->group(function () {
    Route::get('/', [EventController::class, 'home']);
}); 