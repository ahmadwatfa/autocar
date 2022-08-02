<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name_ar', 'name_en', 'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function ComModelYear()
    {
        return $this->hasMany(ComModelYear::class);
    }
}
