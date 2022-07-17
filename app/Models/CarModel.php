<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_ar', 'name_en', 'year', 'cars_company_id',
    ];

    public function car_company()
    {
        return $this->belongsTo(CarCompany::class);
    }
}
