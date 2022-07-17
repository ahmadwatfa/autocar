<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'name', 'mobile', 'address', 'lat',
        'lng', 'logo', 'image', 'count_ads', 'status', 'data_complete'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
