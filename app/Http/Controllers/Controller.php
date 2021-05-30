<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing(){
        return view('welcome');
    }
    public function kontak(){
        return view('kontak');
    }

    public function dokumentasi(){
        return view('dokumentasi');
    }

    public function alumni(){
        return view('alumni');
    }

    public function info(){
        return view('info');
    }

    public function artikel(){
        return view('artikel');
    }
}
