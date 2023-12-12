<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services(){
        return view('component.service');
    }

    public function contact(){
        return view('component.contact');
    }

    public function form(){
        return view('component.form');
    }
}
