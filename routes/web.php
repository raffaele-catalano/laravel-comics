<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comic/{slug}', function ($slug) {
    $comics = config('db-comics');
    $comicFiltered = array_filter($comics, fn($comic) => $comic['slug'] === $slug);
    $comic = $comicFiltered[array_key_first($comicFiltered)];
    return view('comic', compact('comic'));
})->name('comic');
