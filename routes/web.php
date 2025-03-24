<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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



