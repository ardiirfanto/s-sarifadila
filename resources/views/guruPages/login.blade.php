<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <section class="flex justify-center h-screen w-screen items-center">
        <div class="py-8 md:px-12 px-6 md:w-1/2 lg:w-1/3 w-full mx-3 border rounded-xl">
            <livewire:login-form />  
        </div>
    </section>
</body>
</html>