<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
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
        return $this->hasOne(EmployeeAddresses::class);
    }

    public function contact()
    {
        return $this->hasOne(EmployeeContacts::class);
    }

}
