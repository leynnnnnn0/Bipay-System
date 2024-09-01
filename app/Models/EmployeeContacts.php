<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeContacts extends Model
{
    use HasFactory;

    protected $fillable = [
      'email',
      'password'
    ];

    public function employee()
    {
        $this->belongsTo(Employees::class);
    }
}
