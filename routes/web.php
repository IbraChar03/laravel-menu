<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "home"])->name("home");
Route::get('/create', [MainController::class, "createMenu"])->name("menu.create");
Route::post('/request', [MainController::class, "requestMenu"])->name("menu.request");
Route::get('/edit/{menu}', [MainController::class, "editMenu"])->name("menu.edit");
Route::post('/update/{menu}', [MainController::class, "updateMenu"])->name("menu.update");