<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // dd($id);
        $cities = City::where('country_id', $id)->paginate(12);
        $country = Country::where('id', $id)->first();
        foreach($cities as $city) {
            $city->country = $country->sortname;
        }
        return view('Admin-Dashboard.pages.city.cities', [
            'cities' => $cities,
            'countryID' => $country->id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($country_id)
    {
        $country = Country::where('id', $country_id)->first();
        return view('Admin-Dashboard.pages.city.add_city', [
            'country' => $country,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:city,name_ar',
            'name_en' => 'required|unique:city,name_en',
            'country_id' => 'required',
        ]);

        $city = City::create($input);
        return Redirect()->back();
        // return redirect()->route('city.index', $input['country_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($city)
    {
        // $co = Country::where('id', $country)->first();
        $city = City::findOrFail($city);

        return view('Admin-Dashboard.pages.city.edit_city', [
            'city' => $city,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);

        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:city,name_ar',
            'name_en' => 'required|unique:city,name_en',
            'country_id' => 'required',
        ]);
        $city->update($input);

        return redirect()->route('city.index', $input['country_id']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()
        ->route('country.index')
        ->with('delete', "تم حذف المدينة بنجاح");
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id",$request->country_id)->get();
        if ($request['local'] == 'ar') {
            foreach ($data['cities'] as $city) {
                $city->name = $city->name_ar;
            }
        } else {
            foreach ($data['cities'] as $city) {
                $city->name = $city->name_en;
            }
        }
        return response()->json($data);
    }
}
