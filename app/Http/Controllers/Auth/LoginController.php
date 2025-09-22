<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function index()
    {
        return view('user/login', [
            'title' => 'GadaiStarTech | Login',
        ]);
    }

    public function validateLogin(Request $request)
    {
        $request->validate([
            'nik' => 'required|exists:users,nik',
            'password' => 'required',
        ], [
            'nik.exists' => 'The selected nik is invalid.',
        ]);
    }


    public function login(Request $request)
    {
        // Proses autentikasi
        $credentials = $request->only('nik', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->status === 'verified') {
                // Regenerate session
                $request->session()->regenerate();
                $rememberToken = $user->getRememberToken();
                $cookie = Cookie::make('remember_me',$rememberToken,60*24*1);
                $user->update(['remember_token' => $rememberToken]);

    
                // Pengalihan berdasarkan peran (role)
                if ($user->role === 'admin') {
                    return redirect()->route('admin')->withCookie($cookie);
                } else {
                    return redirect()->route('user-profil')->withCookie($cookie);
                }
            } else {
                // Logout jika status tidak terverifikasi
                Auth::logout();
    
                return redirect()->route('user/login')->with('error', 'Your account is not verified.');
            }
        }

        return redirect()->route('user/login')->with('error', 'NIK atau password tidak terdaftar');
    }
    

    public function logout(){
        Auth::logout();
        return redirect('/user');
    }
}