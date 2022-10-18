<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Slider;
use App\Dokumentasi;
use App\Alumni;
use App\Artikel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing(){
        $slider = Slider::all();
        $artikel = Artikel::orderBy('id', 'desc')->take(3)->get();
        return view('welcome', compact('slider','artikel'));
    }
    public function kontak(){
        return view('kontak');
    }

    public function dokumentasi(){
        $dok = Dokumentasi::all();
        return view('dokumentasi', compact('dok'));
    }

    public function alumni(){
        $alumni = Alumni::all();
        return view('alumni', compact('alumni'));
    }

    public function info(){
        $artikel = Artikel::orderBy('id','desc')->get();
        return view('info', compact('artikel'));
    }

    public function artikel($id){
        $artikel = Artikel::find($id);
        return view('artikel', compact('artikel'));
    }

    public function petunjuk(){
        return view('auth.petunjuk');
    }
}
