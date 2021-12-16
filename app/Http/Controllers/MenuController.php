<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('beranda');
    }

    public function infoKegiatan(){
        return view('info');
    }

    public function dataMahasiswa(){
        return view('mahasiswa');
    }
}
