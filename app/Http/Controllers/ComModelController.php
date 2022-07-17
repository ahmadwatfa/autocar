<?php

namespace App\Http\Controllers;

use App\Models\ComModel;
use App\Http\Requests\StoreComModelRequest;
use App\Http\Requests\UpdateComModelRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class ComModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cars = ComModel::where('company_id', $id)->get();
        $company = Company::where('id', $id)->value('name_en');
        return view('Admin-Dashboard.pages.brand.brands', [
            'cars' => $cars,
            'company' => $company,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company = Company::where('id', $id)->first();
        return view('Admin-Dashboard.pages.brand.add_brand', [
            'company' => $company,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $city = ComModel::create($input);

        return redirect()->route('brand.index', $input['company_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComModel  $comModel
     * @return \Illuminate\Http\Response
     */
    public function show(ComModel $comModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComModel  $comModel
     * @return \Illuminate\Http\Response
     */
    public function edit($comModel)
    {
        $car = ComModel::findOrFail($comModel);
        return view('Admin-Dashboard.pages.brand.edit_brand', [
            'car' => $car,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComModelRequest  $request
     * @param  \App\Models\ComModel  $comModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $brand = ComModel::findOrFail($id);

        $input = $request->all();
        // $validator = Validator::make($input, [
        //     'name_ar' => 'required|unique:city,name_ar',
        //     'name_en' => 'required|unique:city,name_en',
        //     'country_id' => 'required',
        // ]);
        $brand->update($input);

        return redirect()->route('brand.index', $input['company_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComModel  $comModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $brand = ComModel::findOrFail($id);
        $brand->delete();
        return redirect()
        ->route('company.index')
        ->with('delete', "تم حذف الموديل بنجاح");
    }

    public function fetchCarModels(Request $request)
    {
        $data = ComModel::where("company_id",$request->companyID)->get()->unique('name_en')->values()->all();;
        if ($request['local'] == 'ar') {
            foreach ($data as $model) {
                $model->name = $model->name_ar;
            }
        } else {
            foreach ($data as $model) {
                $model->name = $model->name_en;
            }
        }
        return response()->json($data);
    }

    public function fetchYear(Request $request)
    {
        $name = ComModel::where('id', $request['id'])->value('name_en');
        $data = ComModel::where("name_en",$name)->get(["id","year"]);
        return response()->json($data);
    }

}
