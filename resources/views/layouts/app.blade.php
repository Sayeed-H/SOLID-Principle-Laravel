<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-gQkN/B8G5UjAP5U5eh+cUx/miWc/JSa0DhCzOvty9X/xp+YY0lEww/Fc/+hjQR2e38C0lVZ2OJrMkV7fRDNj8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-gQkN/B8G5UjAP5U5eh+cUx/miWc/JSa0DhCzOvty9X/xp+YY0lEww/Fc/+hjQR2e38C0lVZ2OJrMkV7fRDNj8A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <head>
        <!-- ... other head elements ... -->

        <!-- Bootstrap CSS -->
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-HaK8n9sJ+LdGYxiJ8GnVJ+OUgM6snMkQwXa6WdI0YKnaE5EPrvRMvVXa2iKU7/n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-c4bpoDxgWfM8v3q3eUK8iY7S0zClHfpv7jKwW8g4nf4l2H4byvMc31X2Q8jAa6ZbNnZv/Ax+jjw6nt5U6yDRUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
