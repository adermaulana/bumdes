<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NepoController extends Controller
{
    public function profil_desa(){
        return view('nepo.profil-desa',[
            'title' => 'Profil Desa',
            'breadcrumb' => 'Profil Desa'
        ]);
    }

    public function potensi_desa(){
        return view('nepo.potensi-desa',[
            'title' => 'Potensi Desa',
            'breadcrumb' => 'Potensi Desa'
        ]);
    }

}
