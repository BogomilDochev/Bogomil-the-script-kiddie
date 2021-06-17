<?php

use App\Http\Controllers\PictureController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

if (App::environment('production')) {
    URL::forceScheme('https');
}

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/videos', VideoController::class)->middleware(['auth']);

Route::resource('/pictures', PictureController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
