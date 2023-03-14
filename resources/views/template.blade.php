<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Profile</title>
    </head>
<body>
    <header>
        <div class ="navbar flex items-center justify-between sticky top-0 z-40 bg-white">
            <h2 class = "text4 font-bold font-serif text-slate-900">@yield('judul_halaman')</h2>

            @include('header')
           
        </div>
    </header>

    @yield('konten')

</body>
</html>