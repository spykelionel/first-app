<?php

use App\Http\Controllers\UserController;
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

Route::get("/users", [UserController::class, 'index'])->name('users.index');
Route::get("/users/create", [UserController::class, 'create'])->name('users.create');
Route::post("/users", [UserController::class, "store"])->name("users.store");
Route::put("/users/update/{user}", [UserController::class, "update"])->name("users.update");
Route::get("/users/edit/{user}", [UserController::class, "edit"])->name("users.edit");
Route::delete("/users/delete/{user}", [UserController::class, "delete"])->name("users.delete");