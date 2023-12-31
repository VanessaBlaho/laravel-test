<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\MovieeController;

use Illuminate\Support\Facades\Route;

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




Route::get('/', [IndexController::class, 'index']);

// www.laravel.test/awards
Route::get('/awards', [AwardController::class, 'index']);
Route::get('/top-rated-movies', [MovieController::class, 'index']);
Route::get('/top-rated-games', [VideogameController::class, 'index']);
Route::get('/movies/shawshank-redemption', [MovieeController::class, 'shawshank']);

