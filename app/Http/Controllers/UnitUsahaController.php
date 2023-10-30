<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitUsahaController extends Controller
{
    public function unit_tenda_terowongan(){
        return view('unit_usaha.unit-tenda-terowongan',[
            'title' => 'Unit Tenda Terowongan',
            'breadcrumb' => 'Unit Tenda Terowongan'
        ]);
    }

    public function unit_wisata(){
        return view('unit_usaha.unit-wisata',[
            'title' => 'Unit Wisata',
            'breadcrumb' => 'Unit Wisata'
        ]);
    }

    public function unit_pertanian_dan_peternakan(){
        return view('unit_usaha.unit-pertanian-dan-peternakan',[
            'title' => 'Unit Pertanian dan Peternakan',
            'breadcrumb' => 'Unit Pertanian dan Peternakan'
        ]);
    }
    
}
