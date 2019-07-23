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

    // article
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
    public function oprec(){
        return view('pages.menuarticle.oprec');
    }
    public function materi(){
        return view('pages.menuarticle.materi');
    }
    public function cerc(){
        return view('pages.menuarticle.cerc');
    }
    public function store(){
        return view('pages.menuarticle.store');
    }
    // end of article

    // chemengfair
    public function chemengfair(){
        return view('pages.chemengfair');
    }
    public function semnas(){
        return view('pages.menuchemengfair.semnas');
    }
    public function iso(){
        return view('pages.menuchemengfair.iso');
    }
    public function cesa(){
        return view('pages.menuchemengfair.cesa');
    }
    public function s2c(){
        return view('pages.menuchemengfair.s2c');
    }
    public function ception(){
        return view('pages.menuchemengfair.ception');
    }
    public function chemengawards(){
        return view('pages.menuchemengfair.chemengawards');
    }
    // end of chemengfair

    // departement
    public function departemen(){
        return view('pages.departemen');
    }
    public function ga(){
        return view('pages.menudepartemen.ga');
    }
    public function hrd(){
        return view('pages.menudepartemen.hrd');
    }
    public function prc(){
        return view('pages.menudepartemen.prc');
    }
    public function sed(){
        return view('pages.menudepartemen.sed');
    }
    public function rnt(){
        return view('pages.menudepartemen.rnt');
    }
    public function std(){
        return view('pages.menudepartemen.std');
    }
    public function socdev(){
        return view('pages.menudepartemen.socdev');
    }
    public function techno(){
        return view('pages.menudepartemen.techno');
    }
    
    // end of departemen

    public function alumni(){
        return view('pages.alumni');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function kontak(){
        return view('pages.kontak');
    }

}
