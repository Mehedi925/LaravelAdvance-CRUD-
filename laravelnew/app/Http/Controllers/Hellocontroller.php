<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function home(){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }



}
