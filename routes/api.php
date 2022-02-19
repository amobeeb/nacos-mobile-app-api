<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){

    Route::get('/health', function(){
        return response()->json('Health checked');
    });

    Route::post('/user/register', [\App\Http\Controllers\Api\UserController::class, 'register']);
    Route::post('/user/login', [\App\Http\Controllers\Api\UserController::class, 'login']);

    Route::get('/events', [\App\Http\Controllers\Api\EventController::class, 'index']);
    Route::get('/event/{event}', [\App\Http\Controllers\Api\EventController::class, 'show']);
    Route::get('/events/latest', [\App\Http\Controllers\Api\EventController::class, 'latest']);

    Route::get('/news', [\App\Http\Controllers\Api\NewsController::class, 'index']);
    Route::get('/news/{news}', [\App\Http\Controllers\Api\NewsController::class, 'show']);
    Route::get('/news/latest', [\App\Http\Controllers\Api\NewsController::class, 'show']);

    Route::get('/forum/sections', [\App\Http\Controllers\Api\ForumSectionController::class, 'index']);
    Route::get('/forum/{id}/threads', [\App\Http\Controllers\Api\ForumSectionController::class, 'show']);

    Route::get('/forum/thread/{id}', [\App\Http\Controllers\Api\ForumThreadController::class, 'show']);

    Route::get('/forum/comment', [\App\Http\Controllers\Api\ForumCommentController::class, 'store']);
});

