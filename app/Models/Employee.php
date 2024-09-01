<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'gender',
        'dateOfBirth',
        'phoneNumber',
    ];

    public function address()
    {
        return $this->hasOne(EmployeeAddress::class);
    }

    public function contact()
    {
        return $this->hasOne(EmployeeContact::class);
    }

}
