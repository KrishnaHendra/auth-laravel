<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function administrator(Request $req){
        return view('template_admin');
    }
    public function lecturer(){
        return view('template_lecturer');
    }
    public function student(){
        return view('template_student');
    }
}
