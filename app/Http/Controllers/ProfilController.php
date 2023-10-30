<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentang(){
        return view('profil.tentang',[
            'title' => 'Tentang BUMDES',
            'breadcrumb' => 'Tentang BUMDES'
        ]);
    }

    public function struktur(){
        return view('profil.struktur',[
            'title' => 'Struktur',
            'breadcrumb' => 'Struktur'
        ]);
    }

    public function visi_misi(){
        return view('profil.visi-misi',[
            'title' => 'Visi & Misi',
            'breadcrumb' => 'Visi & Misi'
        ]);
    }
}
