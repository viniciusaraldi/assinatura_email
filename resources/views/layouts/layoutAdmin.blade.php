<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    <main>
        @yield('main')
    </main>

    <script src="{{ asset('js/assinatura/index.js') }}"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</body>
</html>