<?php

use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MainController;


Route::get('admin/user/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/user/login/store', [LoginController::class, 'store']);


Route::get('admin/main', [MainController::class, 'index'])->name('admin')->middleware('auth');
