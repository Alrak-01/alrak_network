<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeveloperController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/developers", [DeveloperController::class, "index"])->name("developer.index");

Route::get("/developers/create", [DeveloperController::class, "create"])->name("developer.create");

Route::get("/developer/{id}", [DeveloperController::class, "show"])->name("developer.show");

Route::post("/developers", [DeveloperController::class, 'save'])->name("developer.save");

Route::DELETE("/developer/{id}", [DeveloperController::class, "destroy"])->name("developer.destroy");


