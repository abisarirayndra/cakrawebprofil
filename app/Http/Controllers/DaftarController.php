<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function reg(Request $request){
        // return $request;
        $email = $request->email;
        $nama = $request->nama;
        $sudah_email = User::where('email', $email)->first();

        if(isset($sudah_email)){
            Alert::error('Email Sudah Terdaftar','Register Gagal');
            return redirect()->route('register');
        }
        else{
            User::create([
                'nama' => $nama,
                'email' => $email,
                'password' => Hash::make($request->password),
                'role_id' => 5,
            ]);
    
        Alert::success('Registrasi Berhasil');
        return redirect()->route('masuk');
        }
    }

    public function masuk(){
        return view('auth.masuk');
    }

    public function upMasuk(Request $request){

        $logintype = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'nama';

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            if(auth()->user()->role_id == 5){
                Alert::toast('Selamat Datang Pendaftar','success');
                return redirect()->route('pendaftar.profil');
            }

        }

        Alert::error('Akses tidak diizinkan','Gagal');
        return redirect('masuk');
    }

    


}
