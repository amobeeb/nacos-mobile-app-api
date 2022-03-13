<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use ApiResponse;
    public function register(UserRequest $request)
    {
        $user = User::create($request->all());
        return $this->responseSuccess(200,"Success", $user);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $user['token'] = $request->user()->createToken($request->email)->plainTextToken;
        }
        return $this->responseSuccess(200,"Success", $user);
    }
}
