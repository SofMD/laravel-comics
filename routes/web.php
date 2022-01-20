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

// homepage
Route::get('/', function () {

    // lista comics
    $comics = config('comics-data');

    return view('home', [
        'comics' => $comics,
    ]);
})->name('home');

// prendo id comics
Route::get('comic/{id}', function ($id) {

    $comics = config('comics-data');

    if(is_numeric($id) && $id >= 0 && $id < count($comics) ) {

        $comic = $comics[$id]; 

    } else {
        abort(404);
    }

    return view('comics-info', [
        'comic' => $comic,
    ]);

})->name('comics-info');



// news
Route::get('/news', function () {
    return view('news');
})->name('news');




