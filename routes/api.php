<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VegetableCalculateController;
use App\Http\Controllers\Api\VegetableController;
use App\Http\Controllers\Api\VegetableSortController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(
    [
        'vigetable'           => VegetableController::class,
        'vigetable-sort'      => VegetableSortController::class,
        'vigetable-calculate' => VegetableCalculateController::class,
    ]
);
