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
    public function article(){
        return view('pages.article');
    }
    public function event(){
        return view('pages.menuarticle.event');
    }
    public function chemist(){
        return view('pages.menuarticle.chemist');
    }
    public function advokasi(){
        return view('pages.menuarticle.advokasi');
    }
    public function chemengfair(){
        return view('pages.chemengfair');
    }
    public function alumni(){
        return view('pages.alumni');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function kontak(){
        return view('pages.kontak');
    }
    public function departemen(){
        return view('pages.departemen');
    }
}
