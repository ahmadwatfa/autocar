<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            'name_ar' => 'الإمارات',
            'name_en' => 'UAE',
            'sortname' => 'UAE',
            'phonecode' => '971',
            'flag' => 'images/flags/uae.png',
            'status' => 1,
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        Country::insert([
            'name_ar' => 'السعودية',
            'name_en' => 'KSA',
            'sortname' => 'KSA',
            'phonecode' => '966',
            'flag' => 'images/flags/ksa.png',
            'status' => 1,
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        Country::insert([
            'name_ar' => 'عٌمان',
            'name_en' => 'Oman',
            'sortname' => 'OM',
            'phonecode' => '968',
            'flag' => 'images/flags/oman.png',
            'status' => 0,
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
