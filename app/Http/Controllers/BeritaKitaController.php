<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaKitaController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function lihatberita(){
        return view('pages.lihat_berita');
    }
}
