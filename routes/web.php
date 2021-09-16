<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Tickets\Add;
use App\Http\Livewire\Tickets\Ticket;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/adminer', function () {
    return view('adminer');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('tickets')->name('tickets.')->group(function () {
        Route::get('/add',Add::class)->name('add');
        Route::get('/{id}',Ticket::class)->name('ticket');
    });
});