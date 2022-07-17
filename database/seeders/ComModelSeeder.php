<?php

namespace Database\Seeders;

use App\Models\ComModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComModel::insert([
            'name_ar' => 'إيه 4',
            'name_en' => 'A4',
            'year' => '2016',
            'company_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        ComModel::insert([
            'name_ar' => 'إيه 6',
            'name_en' => 'A6',
            'year' => '2016',
            'company_id' => '1',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        ComModel::insert([
            'name_ar' => 'إكس 6',
            'name_en' => 'X6',
            'year' => '2016',
            'company_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        ComModel::insert([
            'name_ar' => 'إكس 5',
            'name_en' => 'X5',
            'year' => '2016',
            'company_id' => '2',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
