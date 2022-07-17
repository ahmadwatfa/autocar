<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            'name_ar' => 'العين',
            'name_en' => 'Alain',
            'country_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        City::insert([
            'name_ar' => 'أبوظبي',
            'name_en' => 'Abu Dhabi',
            'country_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        City::insert([
            'name_ar' => 'الرياض',
            'name_en' => 'Riyadh',
            'country_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        City::insert([
            'name_ar' => 'الدمام',
            'name_en' => 'Dammam',
            'country_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
