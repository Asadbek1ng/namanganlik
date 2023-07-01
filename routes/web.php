<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'welcome'])->name('welcome');
Route::get('/article', [PagesController::class, 'article'])->name('article');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/list', [PagesController::class, 'list'])->name('list');