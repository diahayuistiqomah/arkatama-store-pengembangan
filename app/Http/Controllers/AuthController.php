<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('layout.login');
        }
    }
    // Proses login
    public function actLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::Attempt($credentials)) {
            // Login berhasil
            return redirect('dashboard');
        } else {
            // Login gagal
            // Session::flash('error_message', 'Email atau Password Salah');
            // return redirect()->route('login');
            $error_message = 'Email atau password salah';
            return view('layout.login', compact('error_message'));
        }
    }

    public function actlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
