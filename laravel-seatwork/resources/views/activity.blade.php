<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Activity Title' }}</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Activity Page')

@section('content')
    <h1>Work</h1>
    <p>This content is injected into the layout!</p>
@endsection
    <div>
        <h1>
            {{ $heading }}
        </h1>
    </div>
</body>
</html>
