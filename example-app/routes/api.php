<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('JakubCzul/305354/people', [PeopleController::class, 'index']);
Route::post('JakubCzul/305354/people', [PeopleController::class, 'create']);
Route::get('JakubCzul/305354/people/{people}', [PeopleController::class, 'read']);
Route::put('JakubCzul/305354/people/{people}', [PeopleController::class, 'update']);
Route::delete('JakubCzul/305354/people/{people}', [PeopleController::class, 'delete']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
