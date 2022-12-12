{{-- <div style="margin-top: 2px">
    <a href="{{ route('allAds') }}" class="btn all-ads">عرض كافة الاعلانات</a>
</div> --}}
<div class="container">
    <div class="row">
        <div class="info-slide">
            <div class="image-slide">
                <img src="https://automark.ae/images/big-mercedes.png" alt="">
            </div>
        </div>
                    <div class="search-filed">
            <div class="form-main">
                <form action="https://automark.ae/ar/search" method="get">
                    <div class="search-head">

                    </div>
                    <div class="search-body">
                        <div class="search-form">
                            <select name="city_id" id="city" class="search-makes">
                                <option value="" hidden="">اختر المدينة</option>
                            <option value="14">دبي</option><option value="15">أبوظبي</option><option value="16">الشارقة</option><option value="17">العين</option><option value="18">عجمان</option><option value="19">رأس الخيمة</option><option value="20">الفجيرة</option><option value="21">ام القيوين</option><option value="188">المنطقة الغربية</option></select>
                            <select name="carComany_id" id="carCompany" class="search-makes search-mob" style="margin-top: 1em;">
                                <option value="" hidden="">شركة التصنيع</option>
                            <option value="1">AC</option><option value="2">ACURA</option><option value="3">ALFA ROMEO</option><option value="4">ASTON MARTIN</option><option value="5">AUDI</option><option value="6">AURUS</option><option value="7">BENTLEY</option><option value="8">BMW</option><option value="9">BUGATTI</option><option value="10">BUICK</option><option value="11">CADILLAC</option><option value="12">CHEVROLET</option><option value="13">CHRYSLER</option><option value="14">CITROEN</option><option value="15">DAEWOO</option><option value="16">DODGE</option><option value="17">FERRARI</option><option value="18">FIAT</option><option value="19">FORD</option><option value="20">GEELY</option><option value="21">GENESIS</option><option value="22">GMC</option><option value="23">HONDA</option><option value="24">HUMMER</option><option value="25">HYUNDAI</option><option value="26">INFINITI</option><option value="27">ISUZU</option><option value="28">JAGUAR</option><option value="29">JEEP</option><option value="30">KIA</option><option value="31">LAMBORGHINI</option><option value="32">LAND ROVER</option><option value="33">LEXUS</option><option value="34">LINCOLN</option><option value="35">LOTUS</option><option value="36">MASERATI</option><option value="37">MAYBACH</option><option value="38">MAZDA</option><option value="39">MCLAREN</option><option value="40">MERCEDES-BENZ</option><option value="42">MG</option><option value="43">MINI</option><option value="44">MITSUBISHI</option><option value="45">MORGAN</option><option value="46">NIO</option><option value="47">NISSAN</option><option value="48">OPEL</option><option value="49">PEUGEOT</option><option value="50">Polestar</option><option value="51">PORSCHE</option><option value="52">RAM</option><option value="53">RENAULT</option><option value="54">ROLLS-ROYCE</option><option value="55">SEAT</option><option value="56">SKODA</option><option value="57">SUBARU</option><option value="58">SUZUKI</option><option value="59">TESLA</option><option value="60">TOYOTA</option><option value="61">VOLKSWAGEN</option><option value="62">VOLVO</option></select>
                            <select name="carModel_id" id="carModel" class="search-makes search-mob" style="margin-top: 1em;">
                                <option value="" hidden="">الموديل</option>
                            </select>
                            <div>
                                <div class="range-fields">
                                    <label class="heading">السعر (درهم)</label>
                                    <div class="range-inputs">
                                        <input class="text-field" type="number" name="minPrice" placeholder="السعر من">
                                        <input class="text-field" type="number" name="maxPrice" placeholder="إلى">
                                    </div>
                                </div>

                                <div class="range-fields">
                                    <label class="heading">المسافة المقطوعة</label>
                                    <div class="range-inputs">
                                        <input class="text-field" type="number" name="milage_from" placeholder="المسافة من">
                                        <input class="text-field" type="number" name="milage_to" placeholder="إلى">
                                    </div>
                                </div>

                                <div class="range-fields">
                                    <label class="heading">سنة الصنع</label>
                                    <div class="range-inputs">
                                        <select class="text-field" type="number" name="milage_from" placeholder="">
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                        </select>
                                        <select class="text-field" type="number" name="milage_to" placeholder="إلى">
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex">
                                <div class="search-action">
                                    <a href="https://automark.ae/ar/search/more">بحث متقدم</a>
                                </div>
                                <div class="search-action">
                                    <button>بحث</button>
                                </div>
                            </div>
                        </div>
                        <div class="search-shadow"></div>
                
            </div></form>
        </div>
        
    </div>
</div>
</div>
<div class="header-special quick-access">
    <div class="row">
        <div class="col-sm" onclick="countryMenuButton();">
            <img src="https://automark.ae/images/quick-access/country.png" alt="country"><br>
            <span class="nav-quick-access">الدولة</span>
        </div>
                    <a href="https://automark.ae/en">
                <img src="https://automark.ae/images/quick-access/language.png" alt="Language"><br>
                <span class="nav-quick-access">English</span>
            </a>
                <div class="col-sm">
            <a href="https://automark.ae/ar/add-Ads">
                <img src="https://automark.ae/images/quick-access/add.png" alt="add ads"><br>
                <span class="nav-quick-access">إعلن الآن</span>
            </a>
        </div>

        <div class="col-sm" onclick="searchButton();">
            <img src="https://automark.ae/images/quick-access/search.png" alt="search"><br>
            <span class="nav-quick-access">بحث</span>
        </div>

        <div class="col-sm">
            <img src="https://automark.ae/images/quick-access/showroom.png" alt="showroom"><br>
            <a class="nav-quick-access" href="https://automark.ae/ar/showroom">المعارض</a>
        </div>
    </div>
</div>
@if (isset($ads_spical) && $ads_spical->count() > 0)
    @foreach ($ads_spical as $key => $ad)
        <div class="articles" onclick="location.href='{{ route('ads-car.show', $ad->id) }}';">
            <div class="article-grid">
                <div class="article-card" id="{{ $ad->id }}">
                    <div class="article-thumbnail">
                        {{-- <a href="{{ route('ads-car.show', $ad->id) }}">
                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="{{ $ad->title }}">
                        </a> --}}
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-indicators">
                                {{-- {{ dd($media[$ad->id]) }} --}}
                                {{-- @foreach ($media[$ad->id] as $key => $item)
                                    {{ dd($item) }}
                                    @if ($item->is_main)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                                            aria-label="Slide {{ $key }}"></button>
                                    @else
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}"
                                            aria-label="Slide {{ $key }}"></button>
                                    @endif
                                @endforeach --}}
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="First slide">
                                </div>
                                {{-- @foreach ($media[$ad->id] as $item)
                                    @if ($item->is_main)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                src="{{ asset('images/advs/' . $item->file_name) }}" alt="First slide">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                src="{{ asset('images/advs/' . $item->file_name) }}" alt="First slide">
                                        </div>
                                    @endif
                                @endforeach --}}

                            </div>

                        </div>
                    </div>
                    <div class="article-article">
                        <div class="title" style="text-align: center">
                            <h4>{{ $ad->title }}</h4>
                        </div>
                        <div class="ads-price">
                            <span>
                                <h3 {{ $ad->price == 0 ? 'style=font-size:16px' : 'style=font-size:20px' }}>
                                    {{ $ad->price == 0 ? 'السعر عند الإتصال' : $ad->price . ' ' . __('messages.aed') }}
                                </h3>
                            </span>
                            <span style="font-size: 18px;">
                                {{ $car[$ad->id]['companyName'] . ' - ' . $car[$ad->id]['modelName'] }}
                            </span>
                        </div>
                        <div class="ads-call">
                            {{-- <span><i class="bi bi-telephone"></i></span> --}}

                            {{-- <span>
                                @if (isset($ad->showroom_id))
                                    <img style="height: 50px; clip-path: circle();" src="{{ asset($ad->showroomLogo) }}" alt="">
                                @else
                                    <img style="height: 50px; clip-path: circle();" src="{{ asset('images/logo.png') }}" alt="">
                                @endif
                            </span> --}}
                        </div>
                        <div class="row article-info">
                            <div class="col-sm article-details">
                                <span><i class="bi bi-calendar4"></i></span>
                                <br>
                                <span>{{ $ad->year }}</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-speedometer2"></i></span>
                                <br>
                                <span>{{ $ad->mileage . ' ' . __('messages.km') }}</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-geo-alt"></i></span>
                                <br>
                                <span>{{ $ad->city }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
@section('pagescript')
    <script>
        // $(".carousel").swipe({
        //     swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        //         if (direction == 'left') $(this).carousel('next');
        //         if (direction == 'right') $(this).carousel('prev');
        //     },
        //     allowPageScroll: "vertical"
        // });
        $(document).ready(function() {
            $(".slide").carousel({
                interval: 1000,
                pause: false
            });
        });
    </script>
@endsection
