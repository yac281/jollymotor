<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'type', 'brand', 'model', 'year', 
        'engine_mods', 'body_mods', 'suspension_mods', 'wheels', 
        'exhaust', 'interior_mods', 'horsepower', 'torque', 'weight', 
        'top_speed', 'acceleration', 'custom_paint', 'notes', 'image', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
