<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'ADMIN') }}</title>
    <link href="{{ asset('css/adm.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')
</body>
</html>
