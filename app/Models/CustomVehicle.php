<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class CustomVehicle extends Model implements HasMedia
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
