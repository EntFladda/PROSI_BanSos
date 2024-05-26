<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('Username', 'Password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            switch ($user->role) {
                case 1:
                    return redirect()->route('admin.dashboard');
                case 2:
                    return redirect()->route('masyarakat.dashboard');
                case 3:
                    return redirect()->route('rt.dashboard');
                case 4:
                    return redirect()->route('rw.dashboard');
                case 5:
                    return redirect()->route('kelurahan.dashboard');
                default:
                    return redirect('/home');
            }
        } else {
            return redirect()->back()->withErrors(['Username or Password is incorrect.']);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}