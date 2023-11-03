<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin.login');
    }

    public function login(Request $request){
        // Validasi data login
        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            // Jika berhasil login, redirect ke dashboard admin
            return redirect()->route('admin.barang');
        }

        // Jika gagal login, redirect kembali ke halaman login dengan pesan error
        return redirect()->route('admin.login')->withErrors(['email' => 'Data Yang Anda Masukan Salah']);
    }

    public function logout()
    {
        // Logout admin dan redirect ke halaman login
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
