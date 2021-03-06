<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMEF</title>

    <!-- Styles -->
    <link rel="icon" type="imagens/ico" href="/imagens/IMG-20180314-WA0011.ico" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

  @include('layouts._nave')
<main>
  @yield('content')
</main>
@include('layouts._footer')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
@include('layouts.message')

</body>
</html>
