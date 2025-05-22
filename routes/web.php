<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeveloperController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/developers", [DeveloperController::class, "index"]);

Route::get("/developers/create", [DeveloperController::class, "create"]);

Route::get("/developer/{id}", [DeveloperController::class, "show"]);

