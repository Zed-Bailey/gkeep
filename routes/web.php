<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use App\Livewire\{Notes, EditNote, Welcome};

use App\Http\Controllers\Auth\{LoginController, RegisterController, LogoutController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['guest'])->group(function() {
    Route::get('/', Welcome::class);

    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    
    Route::get('/login', [LoginController::class, 'create'])->name("login");
    Route::post('/login', [LoginController::class, 'store']);
    
});


Route::middleware(['auth'])->group(function () {
    Route::get('/notes', Notes::class)->name('notes');
    Route::get('/notes/{id}', EditNote::class);    
    Route::get('/logout', [Logoutcontroller::class, 'destroy']);
});
