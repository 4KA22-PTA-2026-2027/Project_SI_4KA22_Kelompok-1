<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:pengguna,email',
            'no_telepon' => 'nullable|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $pengguna = Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'password' => Hash::make($request->password),
            'role' => 'pelanggan',
        ]);

        Auth::login($pengguna);
        $request->session()->regenerate();

        return redirect()->route('pelanggan.home');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $pengguna = Auth::user();

            if ($pengguna->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($pengguna->role === 'pelanggan') {
                return redirect()->route('pelanggan.home');
            }

            Auth::logout();

            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Role akun tidak valid.',
                ]);
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password yang dimasukkan salah.',
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
