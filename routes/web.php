<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ブログ一覧画面を表示
Route::get('/',[BlogController::class, 'showList'])->name('blogs');

// ブログ一覧画面を表示
Route::get('/blog/{id}', [BlogController::class, 'showDetail'])->name('show');
