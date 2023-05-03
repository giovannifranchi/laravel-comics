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

    $comics = config('db.comics');


    return view('comics', compact('comics'));
})->name('comics');

Route::get('/detail/{index}', function($index){
    $comics_total = config('db.comics');

    if($index > count($comics_total) - 1){
        abort(404);
    }

    $comics = $comics_total[$index];
    return view('comic', compact('comics'));
})->name('comic');



Route::get('/characters', function(){
    return view('characters');
})->name('characters');
