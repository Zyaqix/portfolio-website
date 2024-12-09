<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Portfolio</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
    
            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });
        });
    </script>
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
