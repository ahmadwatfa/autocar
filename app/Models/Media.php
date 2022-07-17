<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;


    protected $fillable = [
        'id', 'file_name', 'file_size', 'file_type', 'file_status', 'file_sort',
        'mediable_type', 'media_id', 'is_main',
    ];

    public function adsCar() {
        return $this->morphTo(AdsCar::class);
    }

    public function adsMotorcycle() {
        return $this->morphTo(AdsMotorcycle::class);
    }

    public function adsBoats() {
        return $this->morphTo(AdsBoat::class);
    }
}
