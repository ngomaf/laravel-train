<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="lgo-DaRosa-template.PNG" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <script src="{{ asset('assets/js/default.js') }}"></script>
</head>
<body>
    <div>
        <header>
            <h1><a href="{{ url('/') }}">DaRosa <span>template</span></a></h1>
    
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Começo</a></li>
                    <li><a href="{{ url('/about') }}">Sobre</a></li>
                    <li><a href="{{ route('user.login') }}" class="btn">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>