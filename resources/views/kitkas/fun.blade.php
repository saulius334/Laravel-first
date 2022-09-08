@extends('home')

@section('title')
Super fun
@endsection

@include('kitkas.bu')


@section('whynot')


lol haha

@if($kuku == 'keturi')

<h1>gerai</h1>

@else 

<h1>blogai</h1>

@endif

@forelse ($tipomas as $item)
    <h2>{{$item}}</h2>
    @empty 
    <h1>nieko ner</h1>
@endforelse
@endsection