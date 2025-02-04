<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi Pembelajaran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @yield('content')
    <script src="js/btn-click.js"></script>
    @if (Auth::user()->role == 'siswa')
        <script src="{{ asset('js/background-music.js') }}"></script> {{-- Efek Sound Background --}}
    @endif
    {{-- @include('javascriptPart.js') --}}
</body>

</html>
