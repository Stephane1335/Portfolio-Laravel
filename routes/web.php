<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SingleProjectController;

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

Route::get('/',[IndexController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/projects',[ProjectController::class, 'index']);
Route::get('/services',[ServiceController::class, 'index']);
Route::get('/resume',[ResumeController::class, 'index']);
Route::get('/project/{id}',[SingleProjectController::class, 'index'])->name('project.detail');