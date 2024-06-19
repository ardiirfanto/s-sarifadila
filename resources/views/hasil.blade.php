<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media Pembelajaran</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <main class="flex flex-col h-screen justify-center items-center gap-8">
        <h1 class="md:text-5xl text-2xl text-center uppercase text-slate-700">Nilai kamu:</h1>
        <p class="text-5xl font-bold">{{ $nilai }}</p>
        <a href="/informasi" class="bg-red-600 text-white text-2xl font-semibold p-3 rounded-lg">Kembali</a>
    </main>
</body>
</html>