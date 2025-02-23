<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return "Nama: Cindy Nur Khoiriyah <br> NIM: [NIM Anda]";
    }

    public function articles($id) {
        return "Halaman Artikel dengan Id $id";
    }
}
