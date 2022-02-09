<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function studentCreate(){
        return view('pages.student.studentCreate');
    }
    
    public function studentCreatesubmitted(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'id'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );

        return "Submited";
    }


    public function studentLogin(){
        return view('pages.student.studentLogin');
    }
    public function studentLoginsubmitted(Request $request){
        $validate = $request->validate([
            'username'=>'required',
            'pass'=>'required',

        ],
        [
            'name.required'=>'Please put your username',
            'pass.required'=>'Please put your password'
        ]
    );

        return "Login Successfull";
    }



}
