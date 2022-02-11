<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
         ]);
   
         $user = User::where('email', $request->email)->first();
   
         if (!$user || !Hash::check($request->password, $user->password)) {
            return response('Login invalid', 403);
         }
         $token = $user->createToken('admin')->plainTextToken;
         return response(['accessToken' => $token,'username' => $user->name], 200);
    }
}
