<?php

namespace App\Http\Controllers;

use App\Models\AdsCar;
use App\Http\Requests\StoreAdsCarRequest;
use App\Http\Requests\UpdateAdsCarRequest;
use App\Models\CarModel;
use App\Models\City;
use App\Models\ComModel;
use App\Models\Company;
use App\Models\Lists;
use App\Models\Media;
use App\Models\Showroom;
use App\Models\User;
use App\Models\Wishlist;
use App\Notifications\AddNew;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Exists;
use Intervention\Image\Facades\Image;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Jenssegers\Agent\Agent;

use function PHPUnit\Framework\isNull;

class AdsCarController extends Controller
{

    public function __construct()
    {

        // $this->middleware('auth', ['except' => ['index', 'show', 'restore', 'search']]);
        $this->middleware(['throttle:3,1', 'CheckAdsNum', 'verified'], ['only' => ['create', 'store']]);
        $this->middleware(['throttle:3,1', 'verified'], ['only' => ['edit', 'update']]);
        $this->middleware('ShowAds', ['only' => ['show']]);
        // $this->authorizeResource(AdsCar::class , ['post', 'edit', 'update']);
    }

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
        return view('add-ads.adsCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdsCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->emailLogin . ' '  .  );
        // dd($request);
        // dd($request->mainImageIndex);
        if (!is_null($request->emailLogin) && !is_null($request->passwordLogin)) {
            Auth::attempt(['email' => $request->emailLogin, 'password' => $request->passwordLogin], 1);
        }
        if ($request->mainImageIndex == null) {
            $request->mainImageIndex = 0;
        }
        // dd(Auth::check());
        if (Auth::guest()) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'mobile' => $request->phone,
            ]);

            event(new Registered($user));
            Auth::login($user);
        }

        $inputs = request()->except('images');
        $user_id = Auth::user();
        if ($user_id->type_user == 2) {
            $show_id = Showroom::where('user_id', $user_id->id)->first();
            $inputs['showroom_id'] = $show_id->id;
        }
        $inputs['type'] = 1;
        $inputs['name'] = Auth::user()->name;
        $inputs['email'] = Auth::user()->email;
        $inputs['user_id'] = Auth::id();

        if (!$request->price) {
            $inputs['price'] = 0;
        }
        if (!$request->phone) {
            $inputs['phone'] = Auth::user()->mobile;
        }
        if (!$request->address) {
            $inputs['address'] = Auth::user()->address;
        }
        $com_mod = ComModel::where('id', $request->carModel_id)->first();
        // $inputs['year'] = $com_mod->year;
        // dd($inputs);
        $adv = AdsCar::create($inputs);


        // if (isset($request->main_image)) {
        //     $file_name = 'adv' . time() . '' . 0 . '.' . $request->main_image->getClientOriginalExtension();
        //     $file_size = $request->main_image->getSize();
        //     $file_type = $request->main_image->getMimeType();
        //     $path = \public_path('/images/advs/' . $file_name);


        //     $image = Image::make($request->main_image->getRealPath());
        //     $image->insert(public_path('images/watermark.png'), 'bottom-right', 20, 20);
        //     $image->save($path, 100);

        //     $adv->media()->create([
        //         'file_name' => $file_name,
        //         'file_size' => $file_size,
        //         'file_type' => $file_type,
        //         'file_status' => true,
        //         'file_sort' => 0,
        //         'is_main' => 1,
        //     ]);
        // }

        if ($request->images && count($request->images) >= 0) {
            $i = 0;
            foreach ($request->images as $image) {
                $file_name = 'adv' . time() . '' . $i . '.' . $image->getClientOriginalExtension();
                $file_size = $image->getSize();
                $file_type = $image->getMimeType();
                $path = \public_path('/images/advs/' . $file_name);

                $image = Image::make($image->getRealPath());
                $image->insert(public_path('images/watermark.png'), 'bottom-right', 20, 20);
                $image->save($path, 100);

                if ($i == $request->mainImageIndex) {
                    $adv->media()->create([
                        'file_name' => $file_name,
                        'file_size' => $file_size,
                        'file_type' => $file_type,
                        'file_status' => true,
                        'file_sort' => $i,
                        'is_main' => 1,
                    ]);
                } else {
                    $adv->media()->create([
                        'file_name' => $file_name,
                        'file_size' => $file_size,
                        'file_type' => $file_type,
                        'file_status' => true,
                        'file_sort' => $i,
                    ]);
                }

                $i++;
            }
        }
        $this->notifyNew();
        return redirect()->route('index');
    }


    public function notifyNew()
    {
        $users = User::where('type_user', 0)->get();

        foreach ($users as $key => $user) {
            # code...
            $user->notify(new AddNew("User Add New Ads"));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdsCar  $adsCar
     * @return \Illuminate\Http\Response
     */
    public function getNameListAR($idItem,$locale,$list)
    {
        if (isset($idItem)) {
            if ($locale == 'ar') {
                $name = $list->where('id', $idItem)->first()['name_ar'];
            } else {
                $name = $list->where('id', $idItem)->first()['name_en'];
            }
            return $name;
        } else {
            return null;
        }
    }


    public function show(AdsCar $adsCar)
    {
        $carComapny = Company::where('id', $adsCar->carComany_id)->first();
        $carModel = ComModel::where('id', $adsCar->carModel_id)->first();
        $locale = LaravelLocalization::getCurrentLocale();

        $list = Lists::all();


        $car['modelName'] = $carModel->name_ar;
        $car['companyName'] = $carComapny->name_ar;

        $adsCar->specification = $this->getNameListAR($adsCar->specification, $locale, $list);
        $adsCar->status_car = $this->getNameListAR($adsCar->status_car, $locale, $list);
        $adsCar->status_engine = $this->getNameListAR($adsCar->status_engine, $locale, $list);
        $adsCar->color = $this->getNameListAR($adsCar->color, $locale, $list);
        $adsCar->petrol_type = $this->getNameListAR($adsCar->petrol_type, $locale, $list);
        $adsCar->body = $this->getNameListAR($adsCar->body, $locale, $list);
        $adsCar->door = $this->getNameListAR($adsCar->door, $locale, $list);

        $car['year'] = $carModel->year;
        $car['logo'] = $carComapny->logo;
        $media = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $adsCar->id)->get();

        if (isset($adsCar->showroom_id)) {
            $showroom = Showroom::where('id', $adsCar->showroom_id)->first();
            return view('show-ads.ads-car', [
                'ads' => $adsCar,
                'showroom' => $showroom,
                'car' => $car,
                'main_img' => $media->where('is_main', 1)->first(),
                'medias' => $media,
                'locale' => $locale,
            ]);
        } else {
            return view('show-ads.ads-car', [
                'ads' => $adsCar,
                'car' => $car,
                'main_img' => $media->where('is_main', 1)->first(),
                'medias' => $media,
                'locale' => $locale,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdsCar  $adsCar
     * @return \Illuminate\Http\Response
     */
    public function edit(AdsCar $adsCar)
    {
        // $this->authorize('edit', $adsCar);
        $media = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $adsCar->id)->get();
        $mainImage = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $adsCar->id)->where('is_main', 1)->first();
        return view('edit-ads.edit-adsCar', [
            'ads' => $adsCar,
            'medias' => $media,
            'mainImage' => $mainImage->file_sort,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdsCarRequest  $request
     * @param  \App\Models\AdsCar  $adsCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdsCar $adsCar)
    {
        $adsCar->country_id = $request->country_id;
        $adsCar->city_id = $request->city_id;
        $adsCar->carComany_id = $request->carComany_id;
        $adsCar->carModel_id = $request->carModel_id;
        $adsCar->specification = $request->specification;
        $adsCar->mileage = $request->mileage;
        $adsCar->price = $request->price;
        $adsCar->phone = $request->phone;

        $adsCar->save();
        // dd($request->mainImageIndex);

        $mainImagePre = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $adsCar->id)->where('is_main', 1)->first();
        $mainImageID = explode("init-", $request->mainImageIndex);
        if ($request->mainImageIndex == null) {
            $mainImageID[1] =   $mainImagePre->file_sort;
        }
        // dd($mainImageID[1]);
        if ($mainImageID[1] !=  $mainImagePre->file_sort) {
            $mainImagePre->is_main = 0;
            $mainImagePre->update();
            $mainImageNew = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $adsCar->id)->where('file_sort', $mainImageID[1])->first();
            $mainImageNew->is_main = 1;
            $mainImageNew->update();
        }
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdsCar  $adsCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdsCar $adsCar)
    {

        $adsCar->delete();
        return response()->json(['success' => 'Deleted successfully.']);
    }

    public function restore($id)
    {
        AdsCar::withTrashed()->find($id)->restore();
        return response()->json(['success' => 'Restore successfully.']);
    }

    public function LoginPost(Request $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        // $this->store($request);

        return redirect()->route('index');
    }


    public function AdminAdsCar(AdsCar $adsCar)
    {
        $ads = AdsCar::all();
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
        return view('Admin-Dashboard.admin-list-AdsCar', [
            'ads' => $ads,
            'car' => $car,
        ]);
    }

    public function adsCarChangeStatus($id)
    {
        $ads = AdsCar::find($id);
        $ads->status = !$ads->status;
        $ads->save();
        return redirect(route('advcar.index'));
    }
    public function adsCarChangeSpecial($id)
    {
        $ads = AdsCar::find($id);
        $ads->is_special = !$ads->is_special;
        $ads->save();
        return redirect(route('advcar.index'));
    }



    // public function adsCarChangeSpecial(Request $request)
    // {
    //     $ads = AdsCar::find($request->id);
    //     $ads->is_special = $request->is_special;
    //     $ads->save();
    //     return response()->json(['success' => 'SPECIAL change successfully.']);
    // }

    public function search(Request $request)
    {

        // dd($request->all());
        // if (isset($request->city_id)) {
        //     // $ads = AdsCar::where('carModel_id', $request->carModel_id)->where('status', 1)->orWhereBetween('price', [$request->minPrice, $request->maxPrice])->paginate(15);
        //     $ads = AdsCar::where('city_id' , $request->city_id)->orWhere('carComany_id', $request->carComany_id)->orWhere('carModel_id', $request->carModel_id)->orWhereBetween('price', [$request->minPrice, $request->maxPrice])->orWhereBetween('mileage', [$request->milage_from, $request->milage_to])->orWhereBetween('year', [$request->year_from, $request->year_to])->where('status', 1)->paginate(15);

        // } else {
        //     $ads = AdsCar::where('carComany_id', $request->carComany_id)->where('status', 1)->orWhereBetween('price', [$request->minPrice, $request->maxPrice])->paginate(15);
        // }
        $ads = AdsCar::where('status', 1)->where('city_id' , $request->city_id)->orWhere('carComany_id', $request->carComany_id)->orWhere('carModel_id', $request->carModel_id)->orWhereBetween('price', [$request->minPrice, $request->maxPrice])->orWhereBetween('mileage', [$request->milage_from, $request->milage_to])->orWhereBetween('year', [$request->year_from, $request->year_to])->paginate(15);
     
        if ($ads) {
            $car = [];
            $media = [];
            foreach ($ads as $ad) {
                // dd($ad->id);
                $carComapny = Company::where('id', $ad->carComany_id)->first();
                $carModel = ComModel::where('id', $ad->carModel_id)->first();
                $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                if (app()->getLocale() == 'ar') {
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
        }
        return view('result', [
            'ads' => $ads,
            'car' => $car,
            'media' => $media
        ]);
    }
    public function search_view()
    {
        // $ads = [''];
        // $car = [''];
        // $media = [''];
        return view('result');
    }

    public function search_more(Request $request)
    {

        $ads = AdsCar::where('carComany_id', $request->carComany_id)->orWhere('country_id', $request->country_id)->orWhereBetween('price', [$request->price_from, $request->price_to])->orWhereBetween('mileage', [$request->milage_from, $request->milage_to])->orWhereBetween('year', [$request->year_from, $request->year_to])->paginate(15);


        if ($ads) {
            $car = [];
            $media = [];
            foreach ($ads as $ad) {
                // dd($ad->id);
                $carComapny = Company::where('id', $ad->carComany_id)->first();
                $carModel = ComModel::where('id', $ad->carModel_id)->first();
                $media[$ad->id] = Media::where('media_type', 'App\Models\AdsCar')->where('media_id', $ad->id)->where('is_main', 1)->first();
                if (app()->getLocale() == 'ar') {
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
        }
        return view('result', [
            'ads' => $ads,
            'car' => $car,
            'media' => $media
        ]);
    }

    public function test()
    {
        return view('add-ads.uploadImage');
    }

    public function wishlist_get()
    {
        # code...
    }
    public function wishlist_store(Request $request)
    {
        $wishads = Wishlist::where('ads_id' , $request->adsId)->first();
        if ($wishads == null) {
            Wishlist::create([
                'ads_id' =>  $request->adsId,
                'user_id' => Auth::user()->id,
            ]);
        return response()->json(['msg'=>'تم اضافة الاعلان للمفضلة بنجاح']);
        }
    }
    public function wishlist_delete($ads_id)
    {
       $ads = Wishlist::where('ads_id' , $ads_id)->where('user_id' , Auth::user()->id)->delete();
       return redirect()->back();
    }
}
