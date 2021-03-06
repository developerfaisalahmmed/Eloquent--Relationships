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

    $foods = \App\Models\Foods::with('allergies', 'categories')->get();
//    return $foods;
    return view('welcome', compact('foods'));
});

Route::get('/foods', function () {

    $foods = \App\Models\Foods::with('allergies', 'categories')->get();
//    return $foods;

    return response()->json($foods);
});

