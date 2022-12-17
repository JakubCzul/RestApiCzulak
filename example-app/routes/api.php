<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('people', [PeopleController::class, 'index']);
Route::get('people/{people}', [PeopleController::class, 'read']);
Route::post('people', [PeopleController::class, 'create']);
Route::put('people/{people}', [PeopleController::class, 'update']);
Route::delete('people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
