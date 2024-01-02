<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Home;
use App\Livewire\Dashboard\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return redirect('dashboard');
});

Route::get('/login', Login::class)->name('login');
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => '/dashboard'], function () {
        Route::get('', Home::class)->name('dashboard');
        Route::get('profile', Profile::class)->name('profile');
        
        // Logout User
        Route::get('logout', function () {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            return redirect('/')->info('Bye');
        });
    });
});