<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdsCar extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'type', 'user_id', 'showroom_id', 'title', 'country_id', 'city_id', 'carComany_id', 'carModel_id', 'specification',
        'mileage', 'price', 'status_car', 'status_engine', 'body', 'door', 'clynder',
        'gear', 'color', 'is_insurance', 'description', 'additions', 'address', 'name',
         'email', 'phone', 'year', 'is_special', 'status', 'petrol_type', 'deletet_at'
    ];
    public function media()
    {
        return $this->morphMany(Media::class, 'media');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function usersFav()
    {
        return $this->belongsToMany(User::class);
    }
}
