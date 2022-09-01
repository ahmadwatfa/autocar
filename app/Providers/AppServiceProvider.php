<?php

namespace App\Providers;

use App\Http\Controllers\CountryController;
use App\Models\AdsCar;
use App\Models\City;
use App\Models\ComModel;
use App\Models\Company;
use App\Models\Media;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::defaultView('default');
        $agent = new Agent();
        View::share('agent', $agent);

        view()->composer(['master', 'account.master'], function ($view) {
            $user = Auth::user();
            if ($user) {
                if ($user->type_user == 3 && !Showroom::where('user_id', $user->id)->value('data_complete')) {
                    $data = array(
                        'countries' => CountryController::country(1),
                        'showroomInfo' => 1,
                    );
                } else {
                    $data = array(
                        'countries' => CountryController::country(1),
                        'showroomInfo' => 0,
                    );
                }
            } else {
                $data = array(
                    'countries' => CountryController::country(1),
                    'showroomInfo' => 0,
                );
            }

            // dd($user);

            $view->with($data);
        });

        view()->composer('components.header', function ($view) {
            $data = array(
                'user' => Auth::user(),
            );
            $view->with($data);
        });

        view()->composer('components.header-static', function ($view) {
            $data = array(
                'user' => Auth::user(),
                'countries' => CountryController::country(1),
            );
            $view->with($data);
        });

        view()->composer('components.ads-car', function ($view) {
            $ads_car = AdsCar::where('status', 1)->where('is_special', 0)->orderBy('id', 'desc')->latest()->limit(8)->get();
            if ($ads_car) {
                $car = [];
                $media = [];
                foreach ($ads_car as $ad) {
                    // dd($ad->id);
                    $carComapny = Company::where('id', $ad->carComany_id)->first();
                    $carModel = ComModel::where('id', $ad->carModel_id)->first();
                    $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                    if (app()->getLocale() == 'ar') {
                        $car[$ad->id]['modelName'] = $carModel->name_ar;
                        $car[$ad->id]['companyName'] = $carComapny->name_ar;
                        $ad->city = City::where('id', $ad->city_id)->value('name_ar');
                    } else {
                        $car[$ad->id]['modelName'] = $carModel->name_en;
                        $car[$ad->id]['companyName'] = $carComapny->name_en;
                        $ad->city = City::where('id', $ad->city_id)->value('name_en');
                    }
                    $car[$ad->id]['year'] = $carModel->year;
                    $car[$ad->id]['logo'] = $carComapny->logo;
                }

                // $ads_spical = $ads->where('is_special', 1)->take(8);
                // $ads_normal = $ads->where('is_special', 0)->take(12);
                // dd($ads_normal);
            }

            if (isset($carComapny)) {
                $data = array(
                    'ads' => $ads_car,
                    'car' => $car,
                    'media' => $media,
                    'carComapny' => $carComapny,
                );
                $view->with($data);
            }


        });

        view()->composer('components.ads-car-mobile', function ($view) {
            $ads_car = AdsCar::where('status', 1)->where('is_special', 0)->inRandomOrder()->limit(9)->orderBy('id', 'desc')->get();
            if ($ads_car) {
                $car = [];
                $media = [];
                foreach ($ads_car as $ad) {
                    // dd($ad->id);
                    $carComapny = Company::where('id', $ad->carComany_id)->first();
                    $carModel = ComModel::where('id', $ad->carModel_id)->first();
                    $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                    if (app()->getLocale() == 'ar') {
                        $car[$ad->id]['modelName'] = $carModel->name_ar;
                        $car[$ad->id]['companyName'] = $carComapny->name_ar;
                        $ad->city = City::where('id', $ad->city_id)->value('name_ar');
                    } else {
                        $car[$ad->id]['modelName'] = $carModel->name_en;
                        $car[$ad->id]['companyName'] = $carComapny->name_en;
                        $ad->city = City::where('id', $ad->city_id)->value('name_en');
                    }
                    $car[$ad->id]['year'] = $carModel->year;
                    $car[$ad->id]['logo'] = $carComapny->logo;
                }
            }
            $data = array(
                'ads_car' => $ads_car,
                'car' => $car,
                'media' => $media
            );
            $view->with($data);
        });

        view()->composer('components.allAds', function ($view) {

            $ads_car = AdsCar::where('status', 1)->where('is_special', 0)->orderBy('id', 'desc')->paginate(20);
            //  dd($ads_car);
            if ($ads_car) {
                $car = [];
                $media = [];
                foreach ($ads_car as $ad) {
                    // dd($ad->id);
                    $carComapny = Company::where('id', $ad->carComany_id)->first();
                    $carModel = ComModel::where('id', $ad->carModel_id)->first();
                    $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                    if (app()->getLocale() == 'ar') {
                        $car[$ad->id]['modelName'] = $carModel->name_ar;
                        $car[$ad->id]['companyName'] = $carComapny->name_ar;
                        $ad->city = City::where('id', $ad->city_id)->value('name_ar');
                    } else {
                        $car[$ad->id]['modelName'] = $carModel->name_en;
                        $car[$ad->id]['companyName'] = $carComapny->name_en;
                        $ad->city = City::where('id', $ad->city_id)->value('name_en');
                    }
                    $car[$ad->id]['year'] = $carModel->year;
                    $car[$ad->id]['logo'] = $carComapny->logo;
                }
            }


            $data = array(
                'ads' => $ads_car,
                'car' => $car,
                'media' => $media,
                'carComapny' => $carComapny,
            );
            $view->with($data);
        });

        view()->composer('components.new-featured', function ($view) {

            $ads_car = AdsCar::where('status', 1)->where('is_special', 1)->inRandomOrder()->limit(9)->orderBy('id', 'desc')->get();
            if ($ads_car) {
                $car = [];
                $media = [];
                foreach ($ads_car as $ad) {
                    // dd($ad->id);
                    $carComapny = Company::where('id', $ad->carComany_id)->first();
                    $carModel = ComModel::where('id', $ad->carModel_id)->first();
                    $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                    if (app()->getLocale() == 'ar') {
                        $car[$ad->id]['modelName'] = $carModel->name_ar;
                        $car[$ad->id]['companyName'] = $carComapny->name_ar;
                        $ad->city = City::where('id', $ad->city_id)->value('name_ar');
                    } else {
                        $car[$ad->id]['modelName'] = $carModel->name_en;
                        $car[$ad->id]['companyName'] = $carComapny->name_en;
                        $ad->city = City::where('id', $ad->city_id)->value('name_en');
                    }
                    $car[$ad->id]['year'] = $carModel->year;
                    $car[$ad->id]['logo'] = $carComapny->logo;
                }
            }

            $data = array(
                'ads_spical' => $ads_car,
                'car' => $car,
                'media' => $media
            );
            $view->with($data);
        });

        view()->composer('components.new-featured-mobile', function ($view) {

            $ads_car = AdsCar::where('status', 1)->where('is_special', 1)->inRandomOrder()->limit(9)->orderBy('id', 'desc')->get();
            if ($ads_car) {
                $car = [];
                $media = [];
                foreach ($ads_car as $ad) {
                    // dd($ad->id);
                    $carComapny = Company::where('id', $ad->carComany_id)->first();
                    $carModel = ComModel::where('id', $ad->carModel_id)->first();
                    $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                    if (app()->getLocale() == 'ar') {
                        $car[$ad->id]['modelName'] = $carModel->name_ar;
                        $car[$ad->id]['companyName'] = $carComapny->name_ar;
                        $ad->city = City::where('id', $ad->city_id)->value('name_ar');
                    } else {
                        $car[$ad->id]['modelName'] = $carModel->name_en;
                        $car[$ad->id]['companyName'] = $carComapny->name_en;
                        $ad->city = City::where('id', $ad->city_id)->value('name_en');
                    }
                    $car[$ad->id]['year'] = $carModel->year;
                    $car[$ad->id]['logo'] = $carComapny->logo;
                }
            }

            $data = array(
                'ads_spical' => $ads_car,
                'car' => $car,
                'media' => $media
            );
            $view->with($data);
        });
    }
}
