<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Requests\StoreShowroomRequest;
use App\Http\Requests\UpdateShowroomRequest;
use App\Models\AdsCar;
use App\Models\City;
use App\Models\ComModel;
use App\Models\Company;
use App\Models\Media;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ShowroomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('showrooms',[
            'showrooms' => Showroom::where('status', 1)->where('data_complete', 1)->paginate(9)
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
     * @param  \App\Http\Requests\StoreShowroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $inputs['user_id'] = Auth::id();

        $logo = $request->logo;
        $image = $request->image;
        $inputs = request()->except(['logo', 'image','_token']);

        $image_name = 'showroom' . '_' . time() . '.' . $image->getClientOriginalExtension();
        $file_size = $image->getSize();
        $file_type = $image->getMimeType();
        $path = \public_path('/images/showroom/' . $image_name);
        Image::make($image->getRealPath())->save($path, 100);

        $logo_name = 'showroom' . '_' . time() . '.' . $logo->getClientOriginalExtension();
        $file_size = $logo->getSize();
        $file_type = $logo->getMimeType();
        $path = \public_path('/images/showroom/logos/' . $logo_name);
        Image::make($image->getRealPath())->save($path, 100);

        $inputs['logo'] = '/images/showroom/logos/' . $logo_name;
        $inputs['image'] = '/images/showroom/' . $image_name;
        $inputs['data_complete'] = 1;
        $showroom = Showroom::where('user_id', Auth::id())->update($inputs);



        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function show(Showroom $showroom)
    {
        $ads = AdsCar::where('showroom_id', $showroom->id)->Where('status' , 1)->paginate(5);
        $car = [];
        $media = [];
        foreach($ads as $ad) {
            // dd($ad->id);
            $carComapny = Company::where('id', $ad->carComany_id)->first();
            $carModel = ComModel::where('id', $ad->carModel_id)->first();
            $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
            if(app()->getLocale() == 'ar') {
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

        return view('showroom', [
            'showroom' => $showroom,
            'ads' => $ads,
            'car' => $car,
            'media' => $media
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Showroom $showroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowroomRequest  $request
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowroomRequest $request, Showroom $showroom)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showroom $showroom)
    {
        //
    }


    public function search(Request $request)
    {
        $data['showrooms'] = Showroom::where('name' , 'LIKE' , "%$request->text%")->get();

        return response()->json($data['showrooms']);
    }
}
