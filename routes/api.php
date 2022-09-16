<?php

use App\Http\Controllers\AdsCarController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ComModelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ListsController;
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

Route::post('country', [CountryController::class, 'fetchCountry']);

Route::post('city', [CityController::class, 'fetchCity']);

Route::post('carcompanies', [CompanyController::class, 'fetchCompanies']);

Route::post('carmodels', [ComModelController::class, 'fetchCarModels']);
Route::post('caryear', [ComModelController::class, 'fetchYear']);

Route::post('itemList', [ListsController::class, 'itemList']);


Route::post('adsCarChangeStatus', [AdsCarController::class, 'adsCarChangeStatus'])->name('adsCarChangeStatus');

Route::post('adsCarChangeSpecial', [AdsCarController::class, 'adsCarChangeSpecial'])->name('adsCarChangeSpecial');

Route::post('restore/adscar', [AdsCarController::class, 'restore']);

Route::get('/test', [AdsCarController::class, 'getNameList']);
