<?php

namespace App\Http\Controllers;

use App\Models\AdsMotorcycle;
use App\Http\Requests\StoreAdsMotorcycleRequest;
use App\Http\Requests\UpdateAdsMotorcycleRequest;

class AdsMotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-ads.adsMotor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdsMotorcycleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdsMotorcycleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdsMotorcycle  $adsMotorcycle
     * @return \Illuminate\Http\Response
     */
    public function show(AdsMotorcycle $adsMotorcycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdsMotorcycle  $adsMotorcycle
     * @return \Illuminate\Http\Response
     */
    public function edit(AdsMotorcycle $adsMotorcycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdsMotorcycleRequest  $request
     * @param  \App\Models\AdsMotorcycle  $adsMotorcycle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdsMotorcycleRequest $request, AdsMotorcycle $adsMotorcycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdsMotorcycle  $adsMotorcycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdsMotorcycle $adsMotorcycle)
    {
        //
    }
}
