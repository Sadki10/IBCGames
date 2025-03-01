<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
</head>
<body class="d-flex flex-column min-vh-100">
@include('structure._menu')
<div class="container py-4 flex-grow-1 position-relative">
    @include('structure._flash_messages')
    @yield('main')
</div>
<script src="https://kit.fontawesome.com/42a9d09dc5.js" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
