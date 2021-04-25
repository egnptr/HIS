<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator, DB, Hash, Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Cari user
        $user = User::where('email', $request->email)->first();
        $bool123 = \Hash::check(123123123,$user->password);

        //Check if user or password incorrect
        if(!$user || !\Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        // Generate Token
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'message' => 'Success',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        //Check User
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Berhasil Logout',
        ], 200);
    }
}
