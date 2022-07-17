<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_ar', 'name_en', 'sortname', 'phonecode', 'flag', 'status',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
