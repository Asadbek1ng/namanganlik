<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;



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
   Route::auto('/', PagesController::class);


Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
  
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resources([
    'categories' => CategoryController::class,
    'posts'=> PostController::class,
    ]);

    Route::resource('messages', MessageController::class)->only('index', 'show', 'destroy');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
