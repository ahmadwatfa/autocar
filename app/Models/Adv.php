<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 'user_id', 'showroom_id','country_id', 'city_id', 'carComany_id', 'carModel_id', 'specification',
        'mileage', 'price', 'status_car', 'status_engine', 'body', 'door', 'clynder',
        'gear', 'color', 'is_insurance', 'description', 'additions', 'address', 'name',
         'email', 'phone', 'is_special', 'status', 'petrol_type'
    ];

    public function media()
    {
        return $this->morphMany(Media::class, 'media');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
