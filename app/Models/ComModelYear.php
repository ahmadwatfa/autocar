<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComModelYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'model_id', 'year',
    ];

    public function ComModel()
    {
    	return $this->belongsTo(ComModel::class);
    }
}
