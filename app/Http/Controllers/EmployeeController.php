<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\StoreAddressRequest;
use App\Http\Requests\Api\StoreEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\User;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = EmployeeResource::collection(User::all());
        return inertia('Employee/Index', ['employees' => $employees]);
    }

    public function create()
    {
        return inertia('Employee/Create');
    }

    public function store(Request $request)
    {
        $employeeData = $request->validate((new StoreEmployeeRequest())->rules());
        $addressData = $request->validate((new StoreAddressRequest())->rules());
        $employee = User::create($employeeData);
        $address = $employee->address()->create($addressData);
        return inertia('Employee/Create', [
            'employee' => $employee,
            'address' => $address
        ]);
    }
}
