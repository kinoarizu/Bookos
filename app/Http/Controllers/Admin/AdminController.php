<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('auth.admin');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            session(['role' => 'admin']);
            return redirect('/admin/dashboard')->with('sukses', 'Selamat Datang Adminku!');
        }
        return redirect('/admin/login')->with('gagal', 'Email Atau Password Salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('role');
        return redirect('/admin/login');
    }
}
