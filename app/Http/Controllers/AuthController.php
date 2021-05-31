<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function tampilLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $logintype = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'nama';

        $credentials = [
            $logintype => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            
            if(auth()->user()->role_id == 2){
                Alert::toast('Selamat datang Admin','success');
                return redirect()->route('admin.slider');
            }
            

        }
        Alert::error('Akses tidak diizinkan','Gagal');
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('Kamu berhasil keluar', 'Selamat tinggal!');
        return redirect()->route('welcome');
    }
}
