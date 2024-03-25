<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'compagnies' => \App\Http\Controllers\API\CompagnieController::class,
        'societes' => \App\Http\Controllers\API\SocieteController::class,
    ]);

});

Route::apiResource('/agences', \App\Http\Controllers\API\AgenceController::class);

/*=====  End of agences   ======*/

/*===========================
=           apporteurs           =
=============================*/

Route::apiResource('/apporteurs', \App\Http\Controllers\API\ApporteurController::class);

/*=====  End of apporteurs   ======*/
