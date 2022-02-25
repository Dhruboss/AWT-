@extends('layouts.app')
@section('content')

@if(Session::get('user')) {{Session::get('user')}} 
<div class="row gutters" style="margin-top: 50px">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                   
                    <h5 class="user-name"><i class="fas fa-user"></i><b> {{$student->name}}</b></h5>
                    <h6 class="user-email"><i class="fas fa-envelope"></i><b> {{$student->email}}</b></h6>
                    <h5 class="user-name"><i class="fas fa-phone-alt"></i><b> {{$student->phone}}</b></h5>
                </div>
                
            </div>
        </div>
    </div>
    </div>
@endif 
@endsection