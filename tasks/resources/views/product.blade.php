@extends('layouts.app')
@section('content')

<h1>Products</h1>
<ul>
@foreach($sizes as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection