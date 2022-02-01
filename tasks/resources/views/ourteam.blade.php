@extends('layouts.app')
@section('content')

<h1>Our Squad</h1>
<ul>
@foreach($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection