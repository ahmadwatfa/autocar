<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::prefix('{locale}')->middleware('setlocale')->middleware('auth')->group(
//     function () {
//         Route::get('/account/setting', [UserDashboardController::class, 'userSetting'])->name('userDashboard');
//         Route::post('/store-showroom', [RegisteredUserController::class, 'storeShowroom'])->name('storeShowroom');
//     }
// );
