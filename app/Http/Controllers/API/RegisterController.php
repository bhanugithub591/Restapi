<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userauth;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    public function register(Request $request)
    { 
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]); 
    $username = $request->username;
    $email    = $request->email;
    $password = $request->password;
    $user  = userauth::create(['username' => $username, 'email' => $email, 'password' => $password]);
    return response()->json(['message' => 'User register Successfully'], 200);
    }
}
