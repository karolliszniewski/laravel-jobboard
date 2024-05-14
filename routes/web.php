<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Job\JobsController;
use App\Http\Controllers\Test\TestController;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/single/{id}', [App\Http\Controllers\Job\JobController::class, 'single'])->name('single.job');
Route::post('/jobs/save', [App\Http\Controllers\Job\JobController::class, 'saveJob'])->name('save.job');
Route::post('/jobs/apply', [App\Http\Controllers\Job\JobController::class, 'jobApply'])->name('apply.job');

Route::get('/categories/single/{name}', [App\Http\Controllers\Categories\CategoriesController::class, 'singleCategory'])->name('categories.single');

Route::get('/users/profile', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('profile');
Route::get('/users/applications', [App\Http\Controllers\Users\UsersController::class, 'applications'])->name('applications');
Route::get('/users/savedjobs', [App\Http\Controllers\Users\UsersController::class, 'savedJobs'])->name('saved.jobs');
Route::get('/users/edit-details', [App\Http\Controllers\Users\UsersController::class, 'editDetails'])->name('edit.details'); 
Route::post('/users/edit-details', [App\Http\Controllers\Users\UsersController::class, 'updateDetails'])->name('update.details'); 