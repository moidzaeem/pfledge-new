<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function registerUserTest(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'gender' => 'nullable|string|max:255',
            'who_needs_care' => 'nullable|string|max:255',
            'is_already_care_level' => 'nullable|boolean',
            'care_level' => 'nullable|string|max:255',
            'care_type' => 'nullable|string|max:255',
        ]);
    
        // Create a new user instance
        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->name = $validatedData['first_name'] . ' ' . $validatedData['last_name']; // optional full name
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->gender = $validatedData['gender'] ?? null;
        // $user->who_needs_care = $validatedData['who_needs_care'] ?? null;
        // $user->is_already_care_level = $validatedData['is_already_care_level'] ?? null;
        // $user->care_level = $validatedData['care_level'] ?? null;
        // $user->care_type = $validatedData['care_type'] ?? null;
        $user->save();
        return view('new.auth.care-registration', compact('user'));

    }
    

    public function showRegisterCareDetails(){
        return view('new.auth.care-registration');
    }

    public function storeCareDetails(Request $request){
        dd($request->all());
    }
}
