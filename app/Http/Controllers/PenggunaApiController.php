<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use App\Pelajar;

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
}
