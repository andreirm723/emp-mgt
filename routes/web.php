<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
route::post('employee',[\App\Http\Controllers\EmployeeController::class, 'store']);
Route::get('employee\show', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');
Route::get('employee', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit']);
Route::put('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'update']);
Route::get('employee/{id}/delete', [\App\Http\Controllers\EmployeeController::class, 'destroy']);
Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
   
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
  
});
