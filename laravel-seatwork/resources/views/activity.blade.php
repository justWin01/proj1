<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Activity Title' }}</title>
</head>
<body>
    <div>
        <h1>
            {{ $heading }}
        </h1>
    </div>
</body>
</html>
