<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('Admin-Dashboard.pages.country.countries', [
            'countries' => $countries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin-Dashboard.pages.country.add_country');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreCountryRequest $request)
    public function store(Request $request)
    {
        // dd($request->status);
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:countries,name_ar',
            'name_en' => 'required|unique:countries,name_en',
            'country_id' => 'required|unique:countries,sortname',
            'phonecode' => 'required|unique:countries,phonecode',
            'flag' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $input['flag'];
        $path = \public_path('/images/flags/');
        $imgName = $input['sortname'] . '.' . $image->getClientOriginalExtension();
        $image->move($path, $imgName);
        $input['flag'] = 'images/flags/' . $imgName;

        $country = Country::create($input);

        return redirect()->route('country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('Admin-Dashboard.pages.country.edit_country',[
            'country'=>$country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);

        $flag = $country->flag;
        if($request->hasFile('flag') && $request->file('flag')->isValid()){
            $flag = $request->file('flag')->store('flag', 'public');
            $data = array_merge($request->all(),['flag' => $flag]);

        }

            $data = array_merge($request->all(),['flag' => $flag]);

        $country->update($data);

        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()
        ->route('country.index')
        ->with('delete', "تم حذف الدولة بنجاح");
    }

    public static function country($status)
    {
        if ($status == 1) {
            $countries = Country::where('status', 1)->get();
        } else {
            $countries = Country::get();
        }

        if (app()->getLocale() == 'ar') {
            foreach ($countries as $country) {
                $country->name = $country->name_ar;
            }
        } else {
            foreach ($countries as $country) {
                $country->name = $country->name_en;
            }
        }
        return $countries;
    }


    public function fetchCountry(Request $request)
    {
        $countries = $this->country(0);
        if ($request['local'] == 'ar') {
            foreach ($countries as $country) {
                $country->name = $country->name_ar;
            }
        } else {
            foreach ($countries as $country) {
                $country->name = $country->name_en;
            }
        }
        return response()->json($countries);
    }
}
