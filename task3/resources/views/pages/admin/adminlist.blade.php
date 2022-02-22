@extends('layouts.app')
@section('content')
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>

        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->name}}</td>
            <td>{{$admin->admin_id}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->phone}}</td>
            <td>{{$admin->password}}</td>


        </tr>
        @endforeach
        
    </table>
@endsection