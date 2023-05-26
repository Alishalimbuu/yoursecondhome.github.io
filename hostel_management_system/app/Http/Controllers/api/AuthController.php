<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function login(Request $request)
    {
        // return "hello";
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid username or password']);
        }


        $token = $user->createToken("token")->plainTextToken;
        return response()->json(['message' => 'login successfull', 'accessToken' => $token, 'user' => $user]);
    }

    //logout
    public function logout(Request $request)
    {
        # code...
    }

    public function getProfile()
    {
        $profile = Auth::user();
        return new UserResource($profile);
    }

    public function updateUser(Request $request)
    {
        $student = User::where('id', Auth::user()->id)->first();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->update();
        return response()->json(['message', 'Student uploaded successfully']);
    }

    public function changePassword(Request $request)
    {
        $user = User::where("id", Auth::user()->id)->first();
        $user->password = Hash::make($request->password);
        $user->update();
        return response()->json(['message' => 'Password Change Successfully']);
    }
}
