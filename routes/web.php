<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ExitController;
use App\Http\Controllers\Platform\CoursesController;
use App\Http\Controllers\Platform\SubjectController;
use App\Http\Controllers\Platform\RegisterController;
use App\Http\Controllers\Platform\SessionController;
use App\Http\Controllers\Platform\StudentController;
use App\Http\Middleware\Role;

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::prefix('/panel')->middleware(['auth', 'verified', Role::class])->group(function () {

        Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

        Route::get('/home', [DashboardController::class, 'index'])->name('manager_system');

        Route::resource('courses', CoursesController::class);
        Route::resource('subjects', SubjectController::class);
        Route::resource('register', RegisterController::class);
        Route::resource('session', SessionController::class);

        Route::get('students', [StudentController::class, 'student'])->name('student.view');

        Route::post('logout', [ExitController::class, 'exit'])->name('exit');
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
