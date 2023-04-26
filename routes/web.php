<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ConditionnementController;
use App\Http\Controllers\CouleurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommandeClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategorieController::class);
Route::resource('couleurs', CouleurController::class);
Route::resource('conditionnements', ConditionnementController::class);
Route::resource('commandes_client', CommandeClientController::class);
Route::resource('dashboard', DashboardController::class);

