<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\AdsCar;
use App\Models\Adv;
use App\Models\City;
use App\Models\ComModel;
use App\Models\Company;
use Illuminate\Http\Client\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = AdsCar::all();
        dd($ads);
        if ($ads) {
            $car = [];
            foreach ($ads as $ad) {
                $carComapny = Company::where('id', $ad->carComany_id)->first();
                $carModel = ComModel::where('id', $ad->carModel_id)->first();
                $car[$ad->id]['modelName'] = $carModel->name_en;
                $car[$ad->id]['companyName'] = $carComapny->name_en;
                $car[$ad->id]['year'] = $carModel->year;
                $ad->city = City::where('id', $ad->city_id)->value('name_en');
            }
        }
        return view('admin-dashboard.pages.advcar.advcar_table', [
            'ads' => $ads,
            'car' => $car,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\admin\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
