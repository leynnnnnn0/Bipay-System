<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return inertia('Employee/Index');
    }

    public function create()
    {
        return inertia('Employee/Create');
    }
}
