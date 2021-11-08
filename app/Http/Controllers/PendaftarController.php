<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Pendaftar;

class PendaftarController extends Controller
{
    public function profil(){
        $user = Auth::user()->nama;
        $id = Auth::user()->id;
        $ada = Pendaftar::where('pendaftar',$id)->first();

        return view('pendaftar.profil', compact('user','ada'));
    }

    public function upFormulir(Request $request){
        $user = Auth::user()->id;
        $ada = Pendaftar::where('pendaftar', $user)->first();
        if(isset($ada)){
            Alert::toast('Data Sudah Ada, Silahkan Dicetak','error');
            return redirect()->back();
        }
        $size = $request->file('foto')->getSize();
        if ($size >= 500000){
            Alert::toast('Ukuran foto terlalu besar','error');
            return redirect()->back();
        }
        $image = $request->file('foto');
        $image_name = 'Daftar'.$user.'.'.$request->file('foto')->extension();
        $path = public_path('img/pendaftar/');

        Pendaftar::create([
            'pendaftar' => $user,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'wa' => $request->wa,
            'wali' => $request->wali,
            'wa_wali' => $request->wa_wali,
            'foto' => $image_name,
            'markas' => $request->markas,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'ibu' =>  $request->ibu,
        ]);

        $image->move($path, $image_name);

        $id = Pendaftar::where('pendaftar', $user)->first();
        $user_id = $id->id;

        Alert::toast('Data Pendaftar Disimpan','success');
        return redirect()->route('pendaftar.cetak', $user_id);
    }

    public function cetak($id){
        $user = Auth::user()->nama;
        $data = Pendaftar::find($id);

        return view('pendaftar.cetak', compact('data','user'));
    }

    public function cetak_pdf($id)
    {
        $user = Auth::user()->nama;
        $pendaftar = Pendaftar::find($id);
        $en_foto = (string) Image::make(public_path('img/pendaftar/'. $pendaftar->foto))->encode('data-url');
        $en_logo = (string) Image::make(public_path('img/krisna.png'))->encode('data-url');
        // return $en_foto;
        $pdf = PDF::loadview('pendaftar.review', ['data' => $pendaftar, 'user' => $user,'foto' => $en_foto, 'logo' => $en_logo])->setPaper('a4');
        return $pdf->stream();
    }

    public function edit($id){
        $user = Auth::user()->nama;
        $data = Pendaftar::find($id);
        return view('pendaftar.edit', compact('user','data'));

    }

    public function update($id, Request $request){
        $user = Auth::user()->id;
        $data = Pendaftar::find($id);

        if($request->file('foto')){
            $size = $request->file('foto')->getSize();
            if ($size >= 500000){
                Alert::toast('Ukuran foto terlalu besar','error');
                return redirect()->back();
            }
            $new_photo = $request->file('foto');
            if($data->foto && file_exists(public_path('img/pendaftar/'. $data->foto))){
                File::delete(public_path('img/pendaftar/'. $data->foto));
            }
            $images = 'Daftarbaru'.$id.'.'.$request->file('foto')->extension();
            Image::make($new_photo)->save(public_path('img/pendaftar/' . $images));

            $data->update([
                'pendaftar' => $user,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'sekolah' => $request->sekolah,
                'wa' => $request->wa,
                'wali' => $request->wali,
                'wa_wali' => $request->wa_wali,
                'foto' => $images,
                'markas' => $request->markas,
                'nik' => $request->nik,
                'nisn' => $request->nisn,
                'ibu' =>  $request->ibu,
            ]);

        }


        $data->update([
            'pendaftar' => $user,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'sekolah' => $request->sekolah,
                'wa' => $request->wa,
                'wali' => $request->wali,
                'wa_wali' => $request->wa_wali,
                'markas' => $request->markas,
                'nik' => $request->nik,
                'nisn' => $request->nisn,
                'ibu' =>  $request->ibu,
        ]);

        return redirect()->route('pendaftar.cetak', $id);
    }


}
