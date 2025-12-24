<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            Session::put('username', $user->username);
            return redirect('/profile');
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
