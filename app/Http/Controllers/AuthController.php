<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nim'=> 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }
        else
        {
            return back()->with('error', 'NIM atau Password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function regis(Request $request)
    {
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');

        if ($password == $cpassword)
        {
            $hash = bcrypt($password);
            User::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $hash,
            ]);
            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Confirm Password tidak sesuai');
        }
    }
}
