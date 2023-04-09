<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIB - Universitas Palangka Raya</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        @include('components/navbar')
        @yield('banner')
    </header>

    @yield('content')

    @include('components/footer')

    <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/google-maps.js') }}"></script>
    <script src="{{ asset('/assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/theme.js') }}"></script>

</body>

</html>
