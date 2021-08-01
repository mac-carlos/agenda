<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NewController;

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

Route::get('/', [ContactsController::class, 'index']);

Route::get('/info', [InfoController::class, 'index']);

Route::get('/events/new', [NewController::class, 'index']);

Route::post('/events', [NewController::class, 'store']);

Route::get('/events/{id}', [ContactsController::class, 'show']);

Route::delete('/events/{id}', [ContactsController::class, 'destroy']);

Route::get('/events/edit/{id}', [ContactsController::class, 'edit']);

Route::put('/events/update/{id}', [ContactsController::class, 'update']);
