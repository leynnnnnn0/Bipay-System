<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phoneNumber',
        'email',
    ];

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }
}
