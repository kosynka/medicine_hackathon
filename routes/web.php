<?php

use App\Http\Controllers\eb\DiseaseController;
use App\Http\Controllers\eb\UserController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'welcome']);
Route::get('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::post('signin', [AuthController::class, 'signin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('edit', [AuthController::class, 'edit']);
Route::post('update', [AuthController::class, 'update']);
Route::post('store', [AuthController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'record'], function () {
        Route::get('/', [RecordController::class, 'index']);
        Route::get('/create', [RecordController::class, 'create']);
        Route::get('/{id}', [RecordController::class, 'info'])->name('record.info');
        Route::get('/{id}/report', [RecordController::class, 'createReport'])->name('create.report');
    });

    Route::group(['prefix' => 'disease'], function () {
        Route::get('', [DiseaseController::class, 'index']);
        Route::get('/{id}', [DiseaseController::class, 'info'])->name('disease.info');
        Route::post('/{id}/update', [DiseaseController::class, 'update'])->name('disease.update');
        Route::get('/{id}/analyze', [DiseaseController::class, 'analyze'])->name('disease.analyze');
    });
    
    Route::group(['prefix' => 'user'], function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('/{id}', [UserController::class, 'profile'])->name('user.profile');
    });
});
