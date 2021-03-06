<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DominoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('user', [AuthController::class, 'user']);
//Route::middleware('auth:api')->get('domino', [DominoController::class, 'index']);
Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('zero', [DominoController::class, 'index']);
