<?php

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
Route::namespace('App\Http\Controllers\Api\Crm')
     ->group(function () {
         Route::group(['prefix' => 'crm', 'middleware' => 'auth:api'], function () {
             Route::group(['prefix' => 'type'], function () {
                 Route::get('/', 'CrmCompanyTypeController@index')
                      ->name('crm_type_index');
                 Route::get('/{id}', 'CrmCompanyTypeController@show')
                      ->name('crm_type_show');
                 Route::post('/', 'CrmCompanyTypeController@store')
                      ->name('crm_type_store');
                 Route::put('/{id}', 'CrmCompanyTypeController@update')
                      ->name('crm_type_update');
                 Route::delete('/{id}', 'CrmCompanyTypeController@delete')
                      ->name('crm_type_delete');
             });
         });
     });
