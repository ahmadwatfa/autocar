<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\ComModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('Admin-Dashboard.pages.company.companies_list', [

            'companies' => $companies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin-Dashboard.pages.company.add_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name_ar' => 'required|unique:companies,name_ar',
            'name_en' => 'required|unique:companies,name_en',
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

        $CarCompany = Company::create($input);

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('Admin-Dashboard.pages.company.edit_company' , [
            'company'=>$company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $logo = $company->logo;
        if($request->hasFile('logo') && $request->file('logo')->isValid()){
            $logo = $request->file('logo')->store('logo', 'public');
            $data = array_merge($request->all(),['logo' => $logo]);

        }

            $data = array_merge($request->all(),['logo' => $logo]);

        $company->update($data);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()
        ->route('company.index')
        ->with('delete', "تم حذف الشركة بنجاح");
    }

    public static function fetchCompanies(Request $request)
    {
        $companies = Company::where('type', $request->type)->get();
        if ($request['local'] == 'ar') {
            foreach ($companies as $company) {
                $company->name = $company->name_ar;
            }
        } else {
            foreach ($companies as $company) {
                $company->name = $company->name_en;
            }
        }
        return response()->json($companies);
    }
}
