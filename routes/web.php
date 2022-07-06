<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('app_home');
Route::post('/publier', [HomeController::class, 'publier'])->name('publier');
Route::get('/publier/{donnee}', [HomeController::class, 'publier_by'])->name('publier_by');
Route::post('/stocker', [HomeController::class, 'stocker'])->name('stocker');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');



Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
