<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_ar', 'name_en', 'logo', 'type'
    ];

    public function cars_model()
    {
        return $this->hasMany(CarModel::class);
    }
}
