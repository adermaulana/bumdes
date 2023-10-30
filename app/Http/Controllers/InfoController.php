<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function ad_art(){
        return view('info.ad-art',[
            'title' => 'AD/ART',
            'breadcrumb' => 'AD/ART'
        ]);
    }

    public function perjanjian_kerjasama(){
        return view('info.perjanjian-kerjasama',[
            'title' => 'Perjanjian Kerjasama',
            'breadcrumb' => 'Perjanjian Kerjasama'
        ]);
    }

    public function laporan_keuangan(){
        return view('info.laporan-keuangan',[
            'title' => 'Laporan Keuangan',
            'breadcrumb' => 'Laporan Keuangan'
        ]);
    }

    public function bmc(){
        return view('info.bmc',[
            'title' => 'Business Model Canvas',
            'breadcrumb' => 'Business Model Canvas'
        ]);
    }

    public function company_profile(){
        return view('info.company-profile',[
            'title' => 'Company Profile',
            'breadcrumb' => 'Company Profile'
        ]);
    }
}
