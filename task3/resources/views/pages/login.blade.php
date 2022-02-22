@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
<h2>Login</h2>
<form action="{{route('login')}}" class="form-group" method="post">
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
        <span>phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}"class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Login" >                  
</form>
</div>
@endsection