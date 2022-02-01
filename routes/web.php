<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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

Route::get('dashboard', function(){
    return view('admin.index')->name('admin');
})->middleware('auth');


Route::auth();
//Auth::routes();

Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
