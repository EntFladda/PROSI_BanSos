<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $pengguna = $this->create($request->all());

        Auth::login($pengguna);

        return redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:pengguna'],
            'username' => ['required', 'string', 'max:150', 'unique:pengguna'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Pengguna::create([
            'Name' => $data['name'],
            'Email' => $data['email'],
            'Username' => $data['username'],
            'Password' => Hash::make($data['password']),
            'role' => 2, // Default role, you can change it as needed
        ]);
    }

    public function redirectPath()
    {
        return route('masyarakat.dashboard');
    }
}