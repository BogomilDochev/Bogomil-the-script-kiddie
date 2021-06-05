<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fourth Quartile Website</title>

    <link href="{{ asset('css/app.css?v=').time() }}" rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"
    />

</head>

<body>
@include('common.navbar')

@yield('content')

</body>
</html>
