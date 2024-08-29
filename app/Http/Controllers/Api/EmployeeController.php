<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreEmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(StoreEmployeeRequest $request)
    {
        return response()->json(['success' => true]);
    }
}
