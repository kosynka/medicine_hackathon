<?php

use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'welcome']);
Route::get('login', [AuthController::class, 'login']);
Route::post('signin', [AuthController::class, 'signin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('edit', [AuthController::class, 'edit']);
Route::post('update', [AuthController::class, 'update']);
Route::post('store', [AuthController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'doc'], function () {
        Route::get('/', [DocumentController::class, 'index']);
        Route::get('/{id}', [DocumentController::class, 'detail'])->name('doc.detail');
        Route::get('/{id}/delete', [DocumentController::class, 'delete'])->name('doc.delete');
    });

    Route::group(['prefix' => 'template'], function () {
        Route::get('', [TemplateController::class, 'index']);
        Route::get('/{id}', [TemplateController::class, 'details'])->name('template.detail');
        Route::get('/{id}/delete', [TemplateController::class, 'delete'])->name('template.delete');
    });

    Route::group(['prefix' => 'packet'], function () {
        Route::get('', [PacketController::class, 'index']);
        Route::get('/{id}', [PacketController::class, 'details'])->name('packet.detail');
        Route::post('/{id}/update', [PacketController::class, 'update'])->name('packet.update');
        Route::get('/{id}/delete', [PacketController::class, 'delete'])->name('packet.delete');
    });
    
    Route::group(['prefix' => 'user'], function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('/{id}', [UserController::class, 'details'])->name('user.detail');
        Route::get('/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
    });
});
