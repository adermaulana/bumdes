<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungiKamiController extends Controller
{
    public function index(){
        return view('hubungi_kami',[
            'title' => 'Hubungi Kami',
            'breadcrumb' => 'Hubungi Kami'
        ]);
    }
}
