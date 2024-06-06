<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/js/app.js') --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <title>{{ $title ?? 'POKAREZ' }}</title>
</head>

<body>
    <x-navbar />

    <main class="main-content">
        {{ $slot }}
    </main>

    {{-- script bootstrap --}}
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>
