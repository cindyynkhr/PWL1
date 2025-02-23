<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Helo World';
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Cindy Nur Khoiriyah')
            ->with('occupation','Data Analist');
    }
}
