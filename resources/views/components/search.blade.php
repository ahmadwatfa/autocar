
    <div class="search-box">
        <div class="search-head">
            <span><i class="fa fa-search"></i> بحث متقدم</span>
            <button class="btn close-search"><i class="fa fa-trash"></i></button>
        </div>
        <div class="search-form">
            <form action="">
                <select name="country" id="" class="form-control">
                    <option value="" disabled selected hidden>الدولة</option>
                    <option value="">الإمارات</option>
                    <option value="">سعودية</option>
                    <option value="">مصر</option>
                </select>
                <div class="car-type">
                    <p>اختر نوع المركبة</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="cars" value="" checked>
                        <label class="form-check-label" for="cars">
                            سيارات
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="motorcycles" value="">
                        <label class="form-check-label" for="motorcycles">
                            دراجات نارية
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="boats" value="">
                        <label class="form-check-label" for="boats">
                            قوارب
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="type" id="heavy-vehicles" value="">
                        <label class="form-check-label" for="heavy-vehicles">
                            مركبات ثقيلة
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="type" id="all-categories" value="">
                        <label class="form-check-label" for="all-categories">
                            جميع التصنيفات
                        </label>
                    </div>
                </div>
                <select name="country" id="" class="form-control">
                    <option value="" disabled selected hidden>الموديل/الماركة</option>
                    <option value="">مرسيدس</option>
                    <option value="">سبورت</option>
                    <option value="">بي ام</option>
                </select>
                <div class="form-group price">
                    <label for="price">سنة الصنع</label>
                    <div class="clear"></div>
                    <input type="text" name="year_from" class="form-control price-range" id="year" min="1" placeholder="من">
                    <input type="text" name="year_to" class="form-control price-range" id="year" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">السعر (درهم )</label>
                    <div class="clear"></div>
                    <input type="text" name="price_from" class="form-control price-range" id="price" min="1" placeholder="من">
                    <input type="text" name="price_to" class="form-control price-range" id="price" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                <div class="form-group price">
                    <label for="price">الكيلو مترات</label>
                    <div class="clear"></div>
                    <input type="text" name="milage_from" class="form-control price-range" id="milage" min="1" placeholder="من">
                    <input type="text" name="milage_to" class="form-control price-range" id="milage" min="1" placeholder="إلى">
                    <div class="clear"></div>
                </div>
                {{-- <div class="fuel-type">
                    <p>اختر نوع الوقود</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petrol" id="petrol" value="">
                        <label class="form-check-label" for="petrol">
                            بنزين
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="diesel" id="diesel" value="">
                        <label class="form-check-label" for="diesel">
                            ديزل
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hybrid" id="hybrid" value="">
                        <label class="form-check-label" for="hybrid">
                            هايبرد/هيجن
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="electricity" id="electricity" value="">
                        <label class="form-check-label" for="electricity">
                            كهرباء
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="all_fuel" id="all-fuel" value="" checked>
                        <label class="form-check-label" for="all-fuel">
                            جميع الأنواع
                        </label>
                    </div>
                </div> --}}
                <div class="transmission-type">
                    <p>اختر نوع ناقل الحركة</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="normal" value="">
                        <label class="form-check-label" for="normal">
                            عادي
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="automatic" value="">
                        <label class="form-check-label" for="automatic">
                            اوتوماتيك
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transmission-type" id="cvt" value="">
                        <label class="form-check-label" for="cvt">
                            CVT
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="transmission-type" id="all-transmission"
                            value="" checked>
                        <label class="form-check-label" for="all-transmission">
                            جميع الأنواع
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn">اظهار النتائج</button>
            </form>
        </div>
    </div>
