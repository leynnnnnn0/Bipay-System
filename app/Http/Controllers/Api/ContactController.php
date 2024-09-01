<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreContactRequest;

class ContactController extends Controller
{
    public function create(StoreContactRequest $request)
    {
        return response()->json(['success' => true]);
    }
}
