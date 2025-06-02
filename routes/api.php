<?php

use App\Http\Controllers\Api\V1\Auth\IncController;
use App\Http\Controllers\Api\V1\CoursesController;
use App\Http\Controllers\Api\V1\RegisterController;
use App\Http\Controllers\Api\V1\SessionController;
use App\Http\Controllers\Api\V1\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('login', [IncController::class, 'login']);

Route::prefix('panel')->middleware(['auth:sanctum'])->group(function (): void {
    Route::resource('courses', CoursesController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('registers', RegisterController::class);
    Route::resource('sessions', SessionController::class);

    Route::post('logout', [IncController::class, 'logout']);

});
