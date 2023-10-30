<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalitasBadanUsahaController extends Controller
{
    public function sertifikat(){
        return view('legalitas.sertifikat',[
            'title' => 'Sertifikat',
            'breadcrumb' => 'Sertifikat'
        ]);
    }

    public function sk(){
        return view('legalitas.sk-kepengurusan',[
            'title' => 'SK Kepengurusan',
            'breadcrumb' => 'SK Kepengurusan'
        ]);
    }
}
