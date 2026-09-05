<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

Route::get("/",[ContactController::class,"index"]);
Route::post("/contacts/confirm",[ContactController::class,"confirm"]);
Route::post("/contacts",[ContactController::class,"store"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get("/users",[UserController::class,"index"]);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::get('/contacts', [AdminContactController::class, 'index']);
    Route::get('/contacts/{contact}', [AdminContactController::class, 'show']);
});