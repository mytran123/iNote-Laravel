<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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
    return redirect()->route("login");
})->name('dashboard');

Route::get("/login",[AuthController::class,'showFormLogin'])->name("showFormLogin");
Route::post("/login",[AuthController::class,'login'])->name("login");
Route::get("/register",[AuthController::class,'showFormRegister'])->name("showFormRegister");
Route::post("/register",[AuthController::class,'Register'])->name("register");
Route::get("/logout",[AuthController::class,'logout'])->name("logout");


Route::middleware('auth')->prefix('notes')->group(function() {
    Route::get('/',[NoteController::class,"index"])->name("notes.list");
    Route::get('/create',[NoteController::class,"create"])->name("notes.create");
    Route::post('/create',[NoteController::class,"store"])->name("notes.store");
    Route::get('/{id}/detail',[NoteController::class,"show"])->name("notes.detail");
    Route::get('/{id}/update',[NoteController::class,"edit"])->name("notes.edit");
    Route::post('/{id}/update',[NoteController::class,"update"])->name("notes.update");
    Route::get('/{id}/delete',[NoteController::class,"destroy"])->name("notes.delete");
});

Route::prefix('users')->group(function () {
    Route::get('/',[UserController::class,"index"])->name("users.list");
});
