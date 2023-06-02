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
            if(Auth::user()->id_role != 3)
                return redirect('dashboard');
            else{
                return redirect('produk');
            }
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
            if(Auth::user()->id_role != 3)
                return redirect('dashboard');
            else{
                return redirect('produk');
            }
        } else {
            // Login gagal
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
