@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 text-dark" style="background-color: #e3f2fd;">
<h1>Products</h1>
<ul>
@foreach($sizes as $n)
    <li>{{$n}}</li>
@endforeach
</ul>
</div>
@endsection