<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
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
Route::post('/partager', [HomeController::class, 'partager'])->name('partager');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/partagePage', [HomeController::class, 'partagePage'])->name('partagePage');
Route::get('/forum', [ForumController::class, 'forum'])->name('forum');

Route::get('/commentsForum/{forum}', [ForumController::class, 'commentsForum'])->middleware(['auth'])->name('commentsForum');
Route::post('/commenter', [ForumController::class, 'commenter'])->middleware(['auth'])->name('commenter');



Route::get('/dashboard/partager', [HomeController::class, 'dashboardPartager'])->name('dashboardPartager');
//Pour creer un forum
Route::post('/create', [ForumController::class, 'create'])->name('create');


Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
