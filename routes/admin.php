<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\SettingsController;
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
                Route::get('login', [LoginController::class,'index'])->name('admin.login');
                Route::post('login', [LoginController::class,'login'])->name('admin.login.save');
            });

            Route::middleware("auth:admin")->group(function () {
              Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');
              Route::get('/profile', [DashboardController::class,'profile'])->name('admin.profile');

                Route::prefix('settings')->group(function () {
                    Route::get('shipping/{type}', [SettingsController::class,'editShippingMethods'])->name('shipping.method.edit');
                    Route::put('shipping/{id}', [SettingsController::class, 'updateShippingMethods'])->name('shipping.method.update');
                });

              Route::get('/logout', [LoginController::class,'logout'])->name('admin.logout');
            });
        }
    );
