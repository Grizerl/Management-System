<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Role;
use Dom\NamedNodeMap;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::prefix('/panel')->middleware(['auth', 'verified', Role::class])->group(function() {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/home',[DashboardController::class, 'index'])
            ->name('manager_system');

        Route::resource('courses', \App\Http\Controllers\Platform\CoursesController::class);
        
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
