<?php

namespace App\Http\Controllers;

use App\Models\AdsTruck;
use App\Http\Requests\StoreAdsTruckRequest;
use App\Http\Requests\UpdateAdsTruckRequest;

class AdsTruckController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdsTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdsTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdsTruck  $adsTruck
     * @return \Illuminate\Http\Response
     */
    public function show(AdsTruck $adsTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdsTruck  $adsTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(AdsTruck $adsTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdsTruckRequest  $request
     * @param  \App\Models\AdsTruck  $adsTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdsTruckRequest $request, AdsTruck $adsTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdsTruck  $adsTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdsTruck $adsTruck)
    {
        //
    }
}
