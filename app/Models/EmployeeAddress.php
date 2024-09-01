<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
        'barangay',
        'cityOrProvince',
        'streetAddress',
        'postalCode'
    ];

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }

}
