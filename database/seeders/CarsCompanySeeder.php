<?php

namespace Database\Seeders;

use App\Models\CarCompany;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarsCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarCompany::insert([
            'name_ar' => 'آودي',
            'name_en' => 'Audi',
            'logo' => 'images/cars_company/audi.png',
            'type' => 'car',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        CarCompany::insert([
            'name_ar' => 'بي أم دبليو',
            'name_en' => 'BMW',
            'logo' => 'images/cars_company/bmw.png',
            'type' => 'car',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        CarModel::insert([
            'name_ar' => 'إيه 4',
            'name_en' => 'A4',
            'year' => '2016',
            'cars_company_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        CarModel::insert([
            'name_ar' => 'إيه 6',
            'name_en' => 'A6',
            'year' => '2016',
            'cars_company_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        CarModel::insert([
            'name_ar' => 'إكس 6',
            'name_en' => 'X6',
            'year' => '2016',
            'cars_company_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        CarModel::insert([
            'name_ar' => 'إكس 5',
            'name_en' => 'X5',
            'year' => '2016',
            'cars_company_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
