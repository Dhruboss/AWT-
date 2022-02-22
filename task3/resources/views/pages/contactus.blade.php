@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
   <h2>Contact us</h2>
   <form action="{{route('contactus')}}" class="form-group" method="post">
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
        <span>Mail</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Send Messages</span>
        <input type="text" name="messages" value="{{old('messages')}}"class="form-control">
        @error('messages')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Send" >                  
</form>
</div>
@endsection