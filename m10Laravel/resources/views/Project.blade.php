@extends('layout')
@section("content")
<div>
    <img src="{{ asset('storage/' . $data[0]->image) }}" alt="">
    <h2>{{$data[0]->title}}</h2>
    <p>{{$data[0]->disc}}</p>
</div>
@endsection