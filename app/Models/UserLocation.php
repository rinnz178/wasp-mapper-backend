<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;

    protected $table = 'user_locations';

    // Allow mass assignment for these fields
    protected $fillable = ['uuid', 'latitude', 'longitude', 'level']; // Add level to fillable fields

    // Optionally, you can specify the data types for your attributes
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'level' => 'integer', // Cast level to an integer

    ];
}
