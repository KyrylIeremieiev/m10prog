<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    
    <body>
    <header class="flex justify-between items-center p-4 pr-10 pt-2">
        <img class="w-40" src="{{ asset('img/logo-gemeente-amsterdam.png') }}" alt="Logo">
        <div class="flex items-center text-red-500 text-lg space-x-6">
            <a class="hover:underline" href="#">Home</a>
            <a class="hover:underline" href="#">Projecten</a>
            <a class="hover:underline" href="#">Over Ons</a>
            <a class="hover:underline" href="#">Contact</a>
        </div>
    </header>
    <main class="p-8 flex">
        <ul class="flex flex-wrap w-full h-full gap-2rem">
            @foreach ($projects as $index => $project)
            <li><figure class="w-40rem h-40rem ">
                <img src="{{ asset($project->image) }}" alt="" class="w-full h-full object-cover radius-1">
                <figcaption><a href="project/{{$index + 1}}">{{$project->title}}</a></figcaption>
                </figure>
            </li>
            @endforeach
        </ul>
    </main>
    <footer class="h-20rem w-100vw b-footer px-7 py-5">
        <a>Twitter</a>
        <br/>
        <a>Linkedin</a>
        <br/>
        <a>Amsterdam.nl</a>
        <br/>
        <a>Email</a>
    </footer>
</body>

</html>