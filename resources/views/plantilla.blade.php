<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <title> @yield('titulo') </title>

</head>
<body>

    @include('partials.nav')

    <div class="card-body d-flex justify-content-between align-items-right">
        <p><p>
        <p>{{ fechaActual('2023/01/17') }}</p>
    </div>

    @yield('contenido')
</body>
</html>
