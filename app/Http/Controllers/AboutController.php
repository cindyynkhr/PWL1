<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "Nama: Cindy Nur Khoiriyah <br> NIM: [NIM Anda]";
    }
}
