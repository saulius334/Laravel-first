@extends('home')

@section('title')
Super fun
@endsection


@section('whynot')


lol haha

@if($kuku == 'keturi')

<h1>gerai</h1>

@else 

<h1>blogai</h1>

@endif

@foreach ($tipomas as $item)
    <h2>{{$item}}</h2>
@endforeach
@endsection