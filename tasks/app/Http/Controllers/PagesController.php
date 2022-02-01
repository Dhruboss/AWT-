<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

    public function product(){
        $sizes=array("Sandwitches", "Coffee", "Shakes");
        return view('product')
        ->with('sizes', $sizes);
    }
    public function ourteam(){

        $names=array("Salman", "Mushfiq", "Rajin");
        return view('ourteam')
        ->with('names', $names);

    }
    public function aboutus(){
        return view('aboutus');
    }
}
