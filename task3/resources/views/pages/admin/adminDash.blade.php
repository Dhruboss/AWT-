@extends('layouts.app')
@section('content')
    
    @if(Session::get('admin')) {{Session::get('admin')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection