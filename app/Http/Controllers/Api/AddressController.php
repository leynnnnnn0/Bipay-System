<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreAddressRequest;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true]);
    }
    public function create(StoreAddressRequest $request)
    {
        return response()->json(['success' => true]);
    }
}
