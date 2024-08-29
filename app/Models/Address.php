<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
        'barangay',
        'cityOrProvince',
        'streetAddress',
        'zipCode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
