<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
route::post('/events', [EventController::class, 'store']);
route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');