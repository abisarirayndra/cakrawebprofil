<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use App\Pelajar;
use Validator;
use App\Pendidik;

class PenggunaApiController extends Controller
{
    public function dataPelajar(Request $request){

    }

    public function hapusAkunPelajar($id){
        $user = User::find($id);
        $data = Pelajar::where('pelajar_id',$id)->first();
        if($data->foto){
            File::delete(public_path('img/pendaftar/'. $data->foto));
        }
        $user->delete();
        return response()->json(["status" => "Hapus Berhasil"]);
    }

    public function uploadDataPendidik(Request $request){
        //validate data
        $validator = Validator::make($request->all(), [
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nik' => 'required',
            'mapel_id' => 'required',
            'wa' => 'required',
            'ibu' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|size:500',
            'cv' => 'required|mimes:pdf|size:1000'
        ],[
            'tempat_lahir.required' => 'Tempat lahir harus diisi',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'tanggal_lahir.date' => 'Format harus berupa tanggal',
            'alamat.required' => 'Alamat harus diisi',
            'nik.required' => 'NIK harus diisi',
            'mapel_id.required' => 'Mapel harus diisi',
            'wa.required' => 'WA harus diisi',
            'ibu.required' => 'Nama Ibu harus diisi',
            'foto.required' => 'Foto harus diisi',
            'cv.required' => 'CV harus disertakan',
            'foto.mimes' => 'Format foto hanya jpg, jpeg, png !',
            'foto.size' => 'Ukuran file terlalu besar, max 500 Kb',
            'cv.mimes' => 'Format cv hanya pdf !',
            'cv.size' => 'Ukuran file terlalu besar, max 1 Mb'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Gagal upload data, periksa kembali kelengkapan',
                'data' => $validator->errors(),
            ],401);
        }else{
            $buat = Pendidik::create([
                'pendidik_id' => $request->pendidik_id,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
                'nip' => $request->nip,
                'mapel_id' => $request->mapel_id,
                'wa' => $request->wa,
                'ibu' => $request->ibu,
                'foto' => $request->foto,
                'cv' => $request->cv,
            ]);

            if($buat){
                return response()->json([
                    'success' => true,
                    'message' => 'Upload data berhasil',
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal upload data, coba lagi'
                ], 401);
            }
        }

    }
}
