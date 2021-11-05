<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\RegisterAccountRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterAccountRequest $request)
    {
        
        return response()->json($request);
    }
}
