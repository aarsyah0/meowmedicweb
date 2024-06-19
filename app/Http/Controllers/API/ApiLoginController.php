<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = Akun::where('username', $credentials['username'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Check user role
        if ($user->role !== 'USER') {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json(['message' => 'Login successful'], 200);
    }

    public function logout(Request $request)
    {
        // Your logout logic here
        return response()->json(['message' => 'Logout successful'], 200);
    }
}
