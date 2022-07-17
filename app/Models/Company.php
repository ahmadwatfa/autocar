<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_ar', 'name_en', 'logo', 'type'
    ];

    public function com_models()
    {
        return $this->hasMany(ComModel::class);
    }
}
