<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\StoreAddressRequest;
use App\Http\Requests\Api\StoreContactRequest;
use App\Http\Requests\Api\StoreEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = EmployeeResource::collection(Employee::all());
        return inertia('Employee/Index', ['employees' => $employees]);
    }

    public function create()
    {
        return inertia('Employee/Create');
    }

    public function store(Request $request)
    {
        $employeeData = $request->validate((new StoreEmployeeRequest())->rules());
        $contactData = $request->validate((new StoreContactRequest())->rules());
        $addressData = $request->validate((new StoreAddressRequest())->rules());
        $employee = Employee::create($employeeData);
        $employee->contact()->create($contactData);
        $employee->address()->create($addressData);
        return to_route('employees.index');
    }
}
