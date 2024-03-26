<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'societes' => \App\Http\Controllers\API\SocieteController::class,
        'compagnies' => \App\Http\Controllers\API\CompagnieController::class,
        'agences' => \App\Http\Controllers\API\AgenceController::class,
        'apporteurs' => \App\Http\Controllers\API\ApporteurController::class,
        'clients' => \App\Http\Controllers\API\ClientController::class,
        'branches' =>\App\Http\Controllers\API\BrancheController::class,
        'categories' => \App\Http\Controllers\API\CategorieController::class,
    ]);

//});



