<?php

namespace App\Http\Controllers;

use App\Models\AdsCar;
use App\Models\City;
use App\Models\ComModel;
use App\Models\Company;
use App\Models\Country;
use App\Models\Media;
use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset($_COOKIE['country'])) {
            $country = Country::where('id', ($_COOKIE['country'] + 1))->first();
            if (isset($country)) {
                setcookie('country', ($country->id - 1), time() + (86400 * 360), "/");
                $_COOKIE['country'] = $country->id - 1;
                $ads_car = AdsCar::where('country_id', $country->id)->where('status', 1)->where('is_special', 0)->orderBy('id', 'desc')->get();
                if ($ads_car) {
                    $car = [];
                    $media = [];
                    foreach ($ads_car as $ad) {

                        $carComapny = Company::where('id', $ad->carComany_id)->first();
                        $carModel = ComModel::where('id', $ad->carModel_id)->first();
                        // $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
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
                    'media' => $media,
                    'ads' => $ads_car,
                    'country_id' => $country->id,
                );
                return view('index')->with($data);
            } else {
                return abort('404');
            }
        } else {
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
                    if (isset($ad->showroom_id)) {
                        $ad->showroomLogo = Showroom::where('id', $ad->showroom_id)->first()->value('logo');
                    }
                    // $car[$ad->id]['logo'] = $carComapny->logo;
                }
            }

            return view('index', [
                'country_id' => 1,
                'body_class' => 'dark-body',
                'ads_spical' => $ads_car,
                'car' => $car,
                'media' => $media
            ]);
        }
    }

    public function country($id)
    {
        $ads_car = AdsCar::where('country_id', $id)->where('status', 1)->where('is_special', 0)->orderBy('id', 'desc')->get();
        if ($ads_car) {
            $car = [];
            $media = [];
            foreach ($ads_car as $ad) {

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

        $ads_car = AdsCar::where('country_id', $id)->where('status', 1)->where('is_special', 1)->inRandomOrder()->limit(9)->orderBy('id', 'desc')->get();
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
            'id' => $id,
            'ads_spical' => $ads_car,
            'car' => $car,
            'media' => $media,
            'ads' => $ads_car,
        );
        return view('country_car')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allAds()
    {
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

        return view('allAds')->with($data);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_Ads()
    {
        return view('add-ads.add-ads');
    }

    public function test()
    {
        return view('account.account-setting', [
            'user' => Auth::user(),
        ]);
    }
}
