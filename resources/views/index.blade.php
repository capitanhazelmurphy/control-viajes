<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CONTROL DE VIAJES</title>
</head>
<body>

<div id="app">
    <app></app>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>