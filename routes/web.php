<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Role;
use Dom\NamedNodeMap;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::middleware(['auth', 'verified', Role::class])->group(function() {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('Manager System', function (){
            return 1111;
        })->name('manager_system');
    });

    Route::middleware('auth')->group(function () {

        Route::get('/profile',[ProfileController::class, 'edit'])
            ->name('profile.edit');
    
        Route::patch('/profile',[ProfileController::class, 'update'])
            ->name('profile.update');

        Route::delete('/profile',[ProfileController::class, 'destroy'])
            ->name('profile.destroy');
    });

require __DIR__.'/auth.php';
