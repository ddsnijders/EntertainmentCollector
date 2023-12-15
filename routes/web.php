<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
//use app\Http\Controllers;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/shows', [ShowController::class, 'show']);

Route::get('/music', function () {
    return view('music');
});

Route::get('/books', function () {
    return view('books');
});