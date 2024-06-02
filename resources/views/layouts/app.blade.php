<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zona Aman</title>
    @vite('public/css/style.css')
</head>

<body>

    @include('components.navbar')


    <div class="min-h-screen font-poppins">
        @yield('content')
    </div>

    @include('components.footer')

</body>

</html>
