<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Unauthorized'
            ], 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'status'    => 1,
            'message'   => 'Success',
            'user'      =>  $user,
            'token'     =>  $token,
        ], 200);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status'    => 1,
            'message'   => 'Logout success'
        ], 200);
    }
}
