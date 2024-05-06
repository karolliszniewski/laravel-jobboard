<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Job\JobsController;
use App\Http\Controllers\Test\TestController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/single/{id}', [App\Http\Controllers\Job\JobController::class, 'single'])->name('single.job');
Route::post('/jobs/save', [App\Http\Controllers\Job\JobController::class, 'saveJob'])->name('save.job');