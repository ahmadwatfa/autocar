<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = "wish_list";
    protected $guarded = [];

    public function ads_car()
    {
        return $this->belongsTo(AdsCar::class , 'ads_id');
    }
}
