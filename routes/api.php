<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\EventController;
use App\Http\Controllers\Api\Admin\ImageController;
use App\Http\Controllers\Api\Admin\OverviewController;
use App\Http\Controllers\Api\Admin\AdminstratorsController;
use App\Http\Controllers\Api\Admin\GalleryController;
use App\Http\Controllers\Api\Admin\AuthController as AdminAuthController;

Route::get('/login', function () {
    return response()->json([
        'message' => 'You are unauthorized',
    ], 401);
})->name('login');

Route::post('/login', function () {
    return response()->json([
        'message' => 'You are unauthorized',
    ], 401);
})->name('login');


Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::group(['prefix' => 'auth'], function () {
            Route::get('/{id}', [AdminAuthController::class, 'getDetails']);
            Route::post('passwordreset', [AdminAuthController::class, 'resetPassword']);
            Route::post('/update/{id}', [AdminAuthController::class, 'UpdateAdmin']);
            Route::post('/login', [AdminAuthController::class, 'Login']);
            Route::post('/usher-login', [AdminAuthController::class, 'usherLogin']);
            Route::delete('/{id}', [AdminAuthController::class, 'destroy']);
        });


        Route::get('stats', [OverviewController::class, 'stats']);

        Route::middleware("auth:admin_api")->group(function () {

            Route::group(['prefix' => 'usermanagement'], function () {
                Route::group(['prefix' => 'admin'], function () {
                    Route::get('/', [AdminstratorsController::class, 'index']);
                    Route::get('/{id}', [AdminstratorsController::class, 'show']);
                    Route::post('/', [AdminstratorsController::class, 'store']);
                    Route::post('/{id}', [AdminstratorsController::class, 'update']);
                    Route::delete('/{id}', [AdminstratorsController::class, 'destroy']);
                });
            });



            Route::group(['prefix' => 'galleries'], function () {
                Route::get('/', [GalleryController::class, 'index']);
                Route::post('/', [GalleryController::class, 'store']);
                Route::post('/{id}', [GalleryController::class, 'update']);
                Route::get('/{id}', [GalleryController::class, 'show']);
                Route::delete('/{id}', [GalleryController::class, 'destroy']);
                Route::delete('/image/{id}', [GalleryController::class, 'destroyImage']);
            });

            Route::group(['prefix' => 'events'], function () {
                Route::get('/', [EventController::class, 'index']);
                Route::post('/', [EventController::class, 'store']);
                Route::post('/{id}', [EventController::class, 'update']);
                Route::get('/event-details/{id}', [EventController::class, 'Details']);
                Route::get('/{id}', [EventController::class, 'show']);
                Route::get('/registrant/{id}', [EventController::class, 'showRegistrant']);
                Route::delete('/{id}', [EventController::class, 'destroy']);
            });


            Route::post('/uploadimage', [ImageController::class, 'store']);
        });
    });
});
