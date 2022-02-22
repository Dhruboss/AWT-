@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
<h2>Login</h2>
<form action="{{route('studentLogin')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>Ussername</span>
        <input type="text" name="username" value="{{old('username')}}" class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="pass" value="{{old('pass')}}"class="form-control">
        @error('pass')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Login" >                  
</form>
</div>
@endsection