<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

//Customers
Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers');
Route::get('/customers/create', [CustomerController::class, 'create'])
    ->name('customers.create');

Route::post('/customers', [CustomerController::class, 'store'])
    ->name('customers.store');

Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])
    ->name('customers.edit');

Route::patch('/customers/{customer}', [CustomerController::class, 'update'])
    ->name('customers.update');

//Users
Route::get('/users', [UserController::class, 'index'])
    ->name('users');
Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/users', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])
    ->name('users.edit');

Route::patch('/users/{user}', [UserController::class, 'update'])
    ->name('users.update');