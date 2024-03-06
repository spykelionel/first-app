<?php

use Illuminate\Support\Facades\Route;
use Carbon\Factory;

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
    return view('welcome');
});

Route::get("/hello", function () {
    $name = "Spyke Lionel";
    return view("hello", ["name" => $name]);
});

