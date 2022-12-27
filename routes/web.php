<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\ComicController;
use App\Models\Comic;

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
    $comics = Comic::all();
    return view('home',compact('comics'));
});
Route::resource('comics', ComicController::class);
