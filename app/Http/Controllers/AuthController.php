<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $userCheck = User::where('email', $request->email)->first();
            if ($userCheck->role == 'admin') {
                return redirect('/dashboard')->withSuccess('signed in');
            }
            return redirect('/')->withSuccess('signed in');
        }
        return redirect()->back()->withErrors('Email atau password anda salah');
    }
    public function registration()
    {
        return view('auth.biro-registration');
    }
    public function register(Request $request)
    {
        // dd($request->all());
        if (Auth::check()) {
            return redirect('/')->withErrors('Anda sudah login');
        }

        User::create([
            "role" => 'biro',
            "nama" => $request->namaBiro,
            "nama_pt" => $request->namaPT,
            "pemilik" => $request->pemilik,
            "ijin_biro" => $request->ijin,
            "alamat" => $request->alamat,
            "telepon" => $request->phone,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        return redirect('/')->withSuccess('you have signed in');
    }

    // public function dashboard()
    // {
    //     if(Auth::check()) {
    //         return view('dashboard');
    //     }
    //     return redirect('login')->withSuccess('You are not allowed to access');
    // }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
