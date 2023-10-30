<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function kemah_literasi(){
        return view('galeri.kemah-literasi',[
            'title' => 'Kemah Literasi',
            'breadcrumb' => 'Kemah Literasi'
        ]);
    }

    public function pesta_adat(){
        return view('galeri.pesta-adat',[
            'title' => 'Pesta Adat',
            'breadcrumb' => 'Pesta Adat'
        ]);
    }

    public function produk(){
        return view('galeri.produk',[
            'title' => 'Produk',
            'breadcrumb' => 'Produk'
        ]);
    }
}
