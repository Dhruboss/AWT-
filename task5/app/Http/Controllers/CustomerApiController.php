<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerApiController extends Controller
{
    public function signupApi(Request $req)
    {
        $user = new customer;
        $user -> name = $req->name;
        $user -> address = $req->address;
        $user -> email = $req->email;
        $user -> pass = $req->pass;
        $user->save();

        
        return response()->json('Inserted');
    }
}
