<?php

use App\Http\Controllers\Admin\AdminAds;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\AdsCarController;
use App\Http\Controllers\AdsMotorcycleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ComModelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserSettingdController;
use App\Models\AdsCar;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [SiteController::class, 'index'])->name('index');
        Route::get('/country/{id}', [SiteController::class, 'country'])->name('country');
        Route::get('/add-Ads', [SiteController::class, 'add_Ads'])->name('new.ads');

        Route::resource('ads-car', AdsCarController::class);
        Route::post('ads-car/{id}/restore', [AdsCarController::class, 'restore']);
        Route::post('search', [AdsCarController::class, 'search'])->name('search.adsCar');
        Route::get('search/more', [AdsCarController::class, 'search_view'])->name('searchmore.adsCar');
        Route::post('search/more', [AdsCarController::class, 'search_more'])->name('searchmore.adsCar');

        Route::post('loginPost', [AdsCarController::class, 'loginPost'])->name('loginPost');

        Route::resource('ads-motorcycle', AdsMotorcycleController::class);

        Route::resource('settings', UserSettingdController::class);

        Route::resource('showroom', ShowroomController::class);
        Route::post('search/showroom', [ShowroomController::class, 'search'])->name('search.showroom');

        // Route::get('test', function() {
        //     dd(Request::is());
        // });
    }
);


Route::group([
    'prefix' => 'dashboard',
    // 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('Dashboard.index');
    Route::resource('country', CountryController::class);
    Route::resource('city', CityController::class);
    Route::get('/country/{id}/cities', [CityController::class, 'index'])->name('city.index');
    Route::get('/country/{id}/add-city', [CityController::class, 'create'])->name('city.create');
    Route::resource('company', CompanyController::class);
    Route::resource('brand', ComModelController::class);
    Route::get('/company/{id}/brands', [ComModelController::class, 'index'])->name('brand.index');
    Route::get('/company/{id}/add-brand', [ComModelController::class, 'create'])->name('brand.create');
    Route::resource('lists', ListsController::class);
    Route::resource('AdminAds', AdminAds::class);
    Route::get('/adsCar', [AdminDashboardController::class, 'adsCarChangeStatus'])->name('Admin.AdsCar');
});


Route::resource('admin/advcar', CarController::class);
Route::resource('admin/advcar', CarController::class);
Route::get('/admin/advcar/status/{id}', [AdsCarController::class, 'adsCarChangeStatus'])->name('status.AdsCar');
Route::get('/admin/advcar/special/{id}', [AdsCarController::class, 'adsCarChangeSpecial'])->name('special.AdsCar');


Route::controller(FacebookController::class)->group(function(){
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
