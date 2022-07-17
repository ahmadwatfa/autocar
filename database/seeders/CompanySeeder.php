<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            'name_ar' => 'آودي',
            'name_en' => 'Audi',
            'logo' => 'images/cars_company/audi.png',
            'type' => 'car',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        Company::insert([
            'name_ar' => 'بي أم دبليو',
            'name_en' => 'BMW',
            'logo' => 'images/cars_company/bmw.png',
            'type' => 'car',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
