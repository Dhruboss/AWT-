<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\student;
use App\Models\admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function Login(){
        return view('pages.login');
    }

    public function loginSubmit(Request $request){
        $student = student::where('phone',$request->phone)
                            ->where('password',$request->password)
                            ->first();

        // return $teacher;
        if($student){
            $request->session()->put('user',$student->name);
            return view('pages.student.studentDash')->with('student', $student);;
        }

        $admin = admin::where('phone',$request->phone)
        ->where('password',$request->password)
        ->first();

// return $teacher;
        if($admin){
        $request->session()->put('admin',$admin->name);
        return redirect()->route('adminDash');
        }
        return back();
    }

    // public function AdminloginSubmit(Request $request){
    //     $admin = admin::where('phone',$request->phone)
    //                         ->where('password',$request->password)
    //                         ->first();

    //     // return $teacher;
    //     if($admin){
    //         $request->session()->put('user',$admin->name);
    //         return redirect()->route('adminDash');
    //     }
    //     return back();
    // }


    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
