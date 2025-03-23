<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PotionController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\WizardController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('potion', PotionController::class);
Route::apiResource('ingredients', IngredientController::class);
Route::apiResource('wizards', WizardController::class);



