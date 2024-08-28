<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\StoreEmployeeRequest;

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

    public function store(StoreEmployeeRequest $request)
    {
        $request->validated();
        return inertia('Employee/Index', []);
    }
}
