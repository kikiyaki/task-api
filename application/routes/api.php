<?php

use App\Http\Controllers\TaskController;
use App\Http\Middleware\Api\NotAuthenticated;
use App\Http\Middleware\Cors;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('tasks', [TaskController::class, 'index'])
    ->middleware(NotAuthenticated::class);
Route::post('tasks', [TaskController::class, 'create'])
    ->middleware(NotAuthenticated::class);;
Route::put('tasks/{id}', [TaskController::class, 'update'])
    ->middleware(NotAuthenticated::class);;
Route::delete('tasks/{id}', [TaskController::class, 'delete'])
    ->middleware(NotAuthenticated::class);;
