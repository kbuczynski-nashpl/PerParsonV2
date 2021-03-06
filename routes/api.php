<?php

use App\Http\Controllers\Api\Crm\CrmCompanyTypeController;
use App\Http\Controllers\Api\UserController;
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
Route::group(['prefix' => 'crm', 'middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'type'], function () {
        Route::get('/', [CrmCompanyTypeController::class, 'index'])->name('crm_type_index');
        Route::get('/{id}', [CrmCompanyTypeController::class, 'show'])->name('crm_type_show');
        Route::post('/', [CrmCompanyTypeController::class, 'store'])->name('crm_type_store');
        Route::put('/{id}', [CrmCompanyTypeController::class, 'update'])->name('crm_type_update');
        Route::delete('/{id}', [CrmCompanyTypeController::class, 'destroy'])->name('crm_type_delete');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/{id}', [UserController::class, 'show'])->name('user_show');
        Route::post('/', [UserController::class, 'store'])->name('user_store');
        Route::put('/{id}', [UserController::class, 'update'])->name('user_update');
    });
});
