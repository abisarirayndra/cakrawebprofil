<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use RealRashid\SweetAlert\Facades\Alert;


class KontenController extends Controller
{
    public function slider(){
        $list = Slider::all();
        return view('admin.slider.slider', compact('list'));
    }

    public function tambahSlider(){
        return view('admin.slider.tambah');
    }

    public function upSlider(Request $request){
        $image = $request->file('gambar');
        $image_name = 'slider'.$image->getClientOriginalName().'.'.$request->file('gambar')->extension();
            $path = public_path('img/slider/');
            Slider::create([
                'gambar' => $image_name,
            ]);
            $image->move($path, $image_name);

        Alert::toast('Tambah Gambar Berhasil','success');

        return redirect()->route('admin.slider');
    }
}
