<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdsCar;
use App\Models\Adv;
use App\Models\CarCompany;
use App\Models\CarModel;
use App\Models\City;
use Illuminate\Http\Request;


class AdminAds extends Controller
{
    // $ads = Adv::all();
    // $adsMotorcycle = AdsMotorcycle::all();
    // if ($ads) {
    //     $car = [];
    //     $media = [];
    //     foreach($ads as $ad) {
    //         $carComapny = CarCompany::where('id', $ad->carComany_id)->first();
    //         $carModel = CarModel::where('id', $ad->carModel_id)->first();
    //         $media[$ad->id] = Media::where('media_id', $ad->id)->where('file_sort', 0)->first();
    //         if(app()->getLocale() == 'ar') {
    //             $car[$ad->id]['modelName'] = $carModel->name_ar;
    //             $car[$ad->id]['companyName'] = $carComapny->name_ar;
    //             $ad->city = City::where('id', $ad->city_id)->value('name_ar');
    //         } else {
    //             $car[$ad->id]['modelName'] = $carModel->name_en;
    //             $car[$ad->id]['companyName'] = $carComapny->name_en;
    //             $ad->city = City::where('id', $ad->city_id)->value('name_en');
    //         }
    //         $car[$ad->id]['year'] = $carModel->year;
    //         $car[$ad->id]['logo'] = $carComapny->logo;
    //     }

    //     $ads_spical = $ads->where('is_special', 1);
    //     $ads_normal = $ads->where('is_special', 0);
    // }
    // return view('index', [
    //     'ads' => $ads_normal,
    //     'ads_spical' => $ads_spical,
    //     'media' => $media,
    //     'car' => $car,
    //     'adsMotorcycle' => $adsMotorcycle,
    // ]);

    public function AdsCarIndex()
    {
        $ads = Adv::all();
        if ($ads) {
            $car = [];
            foreach ($ads as $ad) {
                $carComapny = CarCompany::where('id', $ad->carComany_id)->first();
                $carModel = CarModel::where('id', $ad->carModel_id)->first();
                $car[$ad->id]['modelName'] = $carModel->name_en;
                $car[$ad->id]['companyName'] = $carComapny->name_en;
                $car[$ad->id]['year'] = $carModel->year;
                $ad->city = City::where('id', $ad->city_id)->value('name_en');
            }
        }
        return view('dashboard.Ads.list-AdsCar', [
            'ads' => $ads,
            'car' => $car,
        ]);
    }

    public function adsCarChangeStatus(Request $request)
    {
        $ads = Adv::find($request->id);
        $ads->status = $request->status;
        $ads->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function adsCarChangeSpecial(Request $request)
    {
        $ads = Adv::find($request->id);
        $ads->is_special = $request->is_special;
        $ads->save();
        return response()->json(['success' => 'SPECIAL change successfully.']);
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $adv = AdsCar::find($id);
        $adv->delete();
        return redirect()
        ->route('advcar.index')
        ->with('delete', "تم حذف الاعلان بنجاح");
    }
}
