<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img class="h-12" src="{{ asset('images/logo.png') }}" alt="Logo" />
                </a>
                <form action=""  class="flex-grow" method="get">
                    {!! Form::text($name="search", $value="", ['placeholder'=>'Search', 'class'=>'class="border border-gray-200 rounded py-2 px-4 w-1/2"']) !!}
                </form>
            </div>
            @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>

        @else
            <a href="{{ route('login') }}">login</a>

        @endauth

        </header>
        <div class="opacity-60 h-px mb-8" style="background: linear-gradient(to right,
             rgba(200, 200, 200, 0) 0%,
            rgba(200, 200, 200, 1) 30%,
            rgba(200, 200, 200, 1) 70%,
            rgba(200, 200, 200, 0) 100%
            );
        ">

        </div>

@yield('content')

<p class="py-16">
    <img alt="Logo" src="{{ asset('images/logo.png') }}" class="h-12 mx-auto">
</p>
</div>
</body>
</html>
