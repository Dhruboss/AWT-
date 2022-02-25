@extends('layouts.app')
@section('content')
<h5>Welcome</h5>   
    @if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
        <table class="table table-border">
        <h3>Profile</h3> 
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Action</th>

        </tr>
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->password}}</td>
            <td><a class="btn btn-success" href="/studentEdit/{{$student->id}}/{{$student->name}}">Edit</a></td>
            <td><a class="btn btn-danger" href="/studentDelete/{{$student->id}}/{{$student->name}}">delete</a></td>

        </tr>
    @endif 
@endsection