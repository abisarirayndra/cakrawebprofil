<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use File;
use Image;
use App\Deskripsi;
use Illuminate\Support\Facades\Auth;
use App\Dokumentasi;
use App\Alumni;


class KontenController extends Controller
{
    public function slider(){
        $user = Auth::user()->nama;
        $list = Slider::all();
        return view('admin.slider.slider', compact('list','user'));
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
        $user = Auth::user()->nama;
        $deskripsi = Deskripsi::first();
        return view('admin.deskripsi.deskripsi', compact('deskripsi','user'));
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

    // Dokumentasi
    public function dokumentasi(){
        $dokumentasi = Dokumentasi::all();
        $user = Auth::user()->nama;

        return view('admin.dokumentasi.dokumentasi', compact('dokumentasi','user'));
    }

    public function tambahDokumentasi(){
        return view('admin.dokumentasi.tambah');
    }

    public function upDokumentasi(Request $request){
        $image = $request->file('foto');
        $image_name = 'dok'.$image->getClientOriginalName().'.'.$request->file('foto')->extension();
            $path = public_path('img/dok/');
            Dokumentasi::create([
                'foto' => $image_name,
                'keterangan' => $request->keterangan,
            ]);
            $image->move($path, $image_name);

        Alert::toast('Tambah Dokumentasi Berhasil','success');

        return redirect()->route('admin.dokumentasi');
    }

    public function editDokumentasi($id){
        $dok = Dokumentasi::find($id);

        return view('admin.dokumentasi.edit',compact('dok'));
    }

    public function updateDokumentasi($id,Request $request){
        $dok = Dokumentasi::find($id);

        $new_photo = $request->file('foto');

        if($dok->foto && file_exists(public_path('img/dok/'. $dok->foto))){
            File::delete(public_path('img/dok/'. $dok->foto));
        }
        $images = 'dokbaru'.$id.'.'.$request->file('foto')->extension();
        Image::make($new_photo)->save(public_path('img/dok/' . $images));
        $dok->update([
            'foto' => $images,
            'keterangan' => $request->keterangan,
        ]);
        
        Alert::toast('Update Dokumentasi Berhasil', 'success');
        return redirect()->route('admin.dokumentasi');
    }

    public function destroyDokumentasi($id){
        $dok = Dokumentasi::find($id);
        File::delete(public_path('img/dok/'. $dok->foto));
        $dok->delete();

        Alert::toast('Hapus Dokumentasi Berhasil', 'success');
        return redirect()->route('admin.dokumentasi');
    }

    // Alumni
    public function alumni(){
        $alumni = Alumni::all();
        $user = Auth::user()->nama;

        return view('admin.alumni.alumni', compact('alumni','user'));
    }

    public function tambahAlumni(){
        return view('admin.alumni.tambah');
    }

    public function upAlumni(Request $request){
        $image = $request->file('foto');
        $image_name = 'dok'.$image->getClientOriginalName().'.'.$request->file('foto')->extension();
            $path = public_path('img/alumni/');
            Alumni::create([
                'nama' => ucwords($request->nama),
                'foto' => $image_name,
                'akademi' => $request->akademi,
                'fb' => $request->fb,
                'twitter' => $request->twitter,
                'ig' => $request->ig,
                'testi' => $request->testi,
                
            ]);
            $image->move($path, $image_name);

        Alert::toast('Tambah Data Berhasil','success');

        return redirect()->route('admin.alumni');
    }

    public function editAlumni($id){
        $alumni = Alumni::find($id);

        return view('admin.alumni.edit',compact('alumni'));
    }

    public function updateAlumni($id,Request $request){
        $alumni = Alumni::find($id);

        $new_photo = $request->file('foto');

        if($alumni->foto && file_exists(public_path('img/alumni/'. $alumni->foto))){
            File::delete(public_path('img/alumni/'. $alumni->foto));
        }
        $images = 'alumnibaru'.$id.'.'.$request->file('foto')->extension();
        Image::make($new_photo)->save(public_path('img/alumni/' . $images));
        $alumni->update([
            'nama' => ucwords($request->nama),
            'foto' => $images,
            'akademi' => $request->akademi,
                'fb' => $request->fb,
                'twitter' => $request->twitter,
                'ig' => $request->ig,
                'testi' => $request->testi,
        ]);
        
        Alert::toast('Update Data Alumni Berhasil', 'success');
        return redirect()->route('admin.alumni');
    }

    public function destroyAlumni($id){
        $alumni = Alumni::find($id);
        File::delete(public_path('img/alumni/'. $alumni->foto));
        $alumni>delete();

        Alert::toast('Hapus Data Alumni Berhasil', 'success');
        return redirect()->route('admin.alumni');
    }
}
