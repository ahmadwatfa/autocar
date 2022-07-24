<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adv;
use App\Models\CarCompany;
use App\Models\CarModel;
use App\Models\City;
use App\Models\Country;
use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin-Dashboard.home');
    }

    public function showCountry()
    {
        $countries = Country::all();
        return view('dashboard.Apps.country', [
            'countries' => $countries,
        ]);
    }

    public function addCountry() {
        return view('dashboard.Apps.addCountry');
    }

    public function saveCountry(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:countries,name_ar',
            'name_en' => 'required|unique:countries,name_en',
            'country_id' => 'required|unique:countries,sortname',
            'phonecode' => 'required|unique:countries,phonecode',
            'phonecode' => 'required|unique:countries,phonecode',
            'flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = $input['flag'];
        $path = \public_path('/images/flags/');
        $imgName = $input['sortname'] . '.' . $image->getClientOriginalExtension();
        $image->move($path, $imgName);
        $input['flag'] = 'images/flags/' . $imgName;
        if ($input['status'] != 'on' || is_null($input['status']) ) {
            $input['status'] = 0;
        } else {
            $input['status'] = 1;
        }

        $country = Country::create($input);

        return redirect(route('country'));
    }

    public function editCountry($id) {
        $country = Country::find($id);
        return view('dashboard.Apps.editCountry', [
            'country' => $country,
        ]);
    }

    public function showCity($id)
    {
        $cities = City::where('country_id', $id)->get();
        $country = Country::where('id', $id)->value('sortname');
        foreach($cities as $city) {
            $city->country = $country;
        }
        return view('dashboard.Apps.city', [
            'cities' => $cities,
            'countryID' => $id,
        ]);
    }

    public function addCity($countryID) {
        $country = Country::where('id', $countryID)->first();
        return view('dashboard.Apps.addCity', [
            'country' => $country,
        ]);
    }

    public function saveCity(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:city,name_ar',
            'name_en' => 'required|unique:city,name_en',
            'country_id' => 'required',
        ]);

        $city = City::create($input);

        return redirect(route('cities', $input['country_id']));
    }

    public function showCompany()
    {
        $companies = CarCompany::all();
        return view('dashboard.Apps.company', [
            'companies' => $companies,
        ]);
    }

    public function addCompany() {
        return view('dashboard.Apps.addCompany');
    }

    public function saveCompany(Request $request) {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:car_companies,name_ar',
            'name_en' => 'required|unique:car_companies,name_en',
            'logo' => 'required|image|mimes:png,svg',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $image = $input['logo'];
        $path = \public_path('/images/cars_company/');
        $imgName = $input['name_en'] . '.' . $image->getClientOriginalExtension();
        $image->move($path, $imgName);
        $input['logo'] = 'images/cars_company/' . $imgName;

        if ($input['status'] != 'on' || is_null($input['status']) ) {
            $input['status'] = 0;
        } else {
            $input['status'] = 1;
        }
// images/cars_company/Audi.png
        $CarCompany = CarCompany::create($input);

        return redirect(route('company'));
    }

    public function showCarModel($id)
    {
        $cars = CarModel::where('cars_company_id', $id)->get();
        $company = CarCompany::where('id', $id)->value('name_en');
        return view('dashboard.Apps.carModel', [
            'cars' => $cars,
            'company' => $company,
            'id' => $id,
        ]);
    }

    public function addModel($companyID) {
        $company = CarCompany::where('id', $companyID)->first();
        return view('dashboard.Apps.addModel', [
            'company' => $company,
        ]);
    }

    public function saveModel(Request $request) {
        $input = $request->all();
        $city = CarModel::create($input);

        return redirect(route('carsModel', $input['cars_company_id']));
    }

    public function list() {
        $list = Lists::paginate(10);
        return view('dashboard.Apps.Lists', [
            'list' => $list,
        ]);
    }
    public function adsCarChangeStatus(Request $request)
    {
        $ads = Adv::find($request->id);
        dd($ads);
        $ads->is_publish = !$ads->is_publish;
        $ads->save();

        return redirect(route('aboutus.index'))->with('ads',$ads);

        $ads = Adv::find($request->id);
        $ads->status = $request->status;
        $ads->save();
        return response()->json(['success' => 'Status change successfully.']);
    }
    public function addItem() {
        return view('dashboard.Apps.addItem');
    }

    public function saveItem(Request $request) {
        $input = $request->all();
        $item = Lists::create($input);

        return redirect(route('list'));
    }
}
