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
    public function contactus(){
        return view('pages.contactus');
    }
    public function contactusSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'email',
            'messages'=>'required',

        ],
        [
            'email.required'=>'Please put your mail',
            'messages.required'=>'Please put your messages'
        ]
    );

        return "sented";
    }
    public function studentDash(){
        return view('pages.student.studentDash');

    }
    public function adminDash(){
        return view('pages.admin.adminDash');

    }
}
