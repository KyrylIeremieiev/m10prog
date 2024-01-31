@extends('layout')
@section("content")
<ul class="flex flex-wrap w-full h-full gap-2rem" id="projects">
    @foreach ($projects as $index => $project)
    <li><figure class="w-40rem h-40rem ">
        <img src="{{ asset($project->image) }}" alt="" class="w-full h-full object-cover radius-1">
        <figcaption><a href="project/{{$index + 1}}">{{$project->title}}</a></figcaption>
        </figure>
    </li>
    @endforeach
</ul>
@endsection
