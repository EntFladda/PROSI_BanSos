<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna; // Make sure to import your Pengguna model

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:pengguna',
            'Username' => 'required|string|max:150|unique:pengguna',
            'Password' => 'required|string|min:8|confirmed',
            'role' => 'required|integer', // Add your specific validation rules for the role
        ]);

        // Create a new user
        $user = Pengguna::create([
            'Name' => $validatedData['Name'],
            'Email' => $validatedData['Email'],
            'Username' => $validatedData['Username'],
            'Password' => bcrypt($validatedData['Password']), // Hash the password for security
            'role' => $validatedData['role'],
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}