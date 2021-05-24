<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use File;
use Image;
use App\Deskripsi;


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

    public function editSlider($id){
        $slider = Slider::find($id);

        return view('admin.slider.edit',compact('slider'));
    }

    public function updateSlider($id,Request $request){
        $slider = Slider::find($id);

        $new_photo = $request->file('gambar');

        if($slider->gambar && file_exists(public_path('img/slider/'. $slider->gambar))){
            File::delete(public_path('img/slider/'. $slider->gambar));
        }
        $images = 'sliderbaru'.$id.'.'.$request->file('gambar')->extension();
        Image::make($new_photo)->save(public_path('img/slider/' . $images));
        $slider->update([
            'gambar' => $images,
        ]);
        
        Alert::toast('Update Gambar Berhasil', 'success');
        return redirect()->route('admin.slider');
    }

    public function destroySlider($id){
        $slider = Slider::find($id);
        File::delete(public_path('img/slider/'. $slider->gambar));
        $slider->delete();

        Alert::toast('Hapus Gambar Berhasil', 'success');
        return redirect()->route('admin.slider');
    }

    // Deskripsi

    public function deskripsi(){
        $deskripsi = Deskripsi::first();
        return view('admin.deskripsi.deskripsi', compact('deskripsi'));
    }

    public function tambahDeskripsi(){
        return view('admin.deskripsi.tambah');
    }

    public function upDeskripsi(Request $request){
        Deskripsi::create($request->all());
        Alert::toast('Tambah Deskripsi Berhasil', 'success');
        return redirect()->route('admin.deskripsi');
    }

    public function editDeskripsi($id){
        $deskripsi = Deskripsi::find($id);
        return view('admin.deskripsi.edit', compact('deskripsi'));
    }

    public function updateDeskripsi($id, Request $request){
        $deskripsi = Deskripsi::find($id);
        $deskripsi->update($request->all());
        Alert::toast('Update Deskripsi Berhasil', 'success');

        return redirect()->route('admin.deskripsi');
    }

    public function destroyDeskripsi($id){
        $deskripsi = Deskripsi::find($id);
        $deskripsi->delete();
        Alert::toast('Hapus Deskripsi Berhasil', 'success');

        return redirect()->route('admin.deskripsi');
    }
}
