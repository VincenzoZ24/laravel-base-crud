<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', 'AdminPagesController@dashboard')->name('admin.dashboard');

Route::resource('comics', 'ComicController');

Route::get('/dashboard', 'AdminPagesController@dashboard')->name('dashboard'); 

