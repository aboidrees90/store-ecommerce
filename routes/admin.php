<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::prefix(LaravelLocalization::setLocale() . '/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(
        function () {
            Route::middleware("guest:admin")->group(function () {
                Route::get('login', 'LoginController@index')->name('admin.login');
                Route::post('login', 'LoginController@login')->name('admin.login.save');
            });

            Route::middleware("auth:admin")->group(function () {
                Route::get('/', 'DashboardController@index')->name('admin.dashboard');

                Route::prefix('settings')->group(function () {
                    Route::get('shipping/{type}', 'SettingsController@editShippingMethods')->name('shipping.method.edit');
                    Route::put('shipping/{id}', 'SettingsController@updateShippingMethods')->name('shipping.method.update');
                });
            });
        }
    );
