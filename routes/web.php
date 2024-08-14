<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TuitionJob;
use Illuminate\Support\Facades\Route;
use App\Http\Models\guardianRequest;
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
Route::get('/', function () {
  
    return view('welcome');
});

Route::get('/registration', function () {
    return view('auth.register');
});

Route::get('/hiretutor', function () {
    return view('guardian.hiretutor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('///',[TuitionJob::class,'index']);
