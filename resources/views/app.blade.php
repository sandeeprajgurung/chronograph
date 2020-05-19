<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timer</title>
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    @stack('page-css')
</head>

<body>
    @include('layouts.header')
    <div class="body-container">
        @yield('main-content')
    </div>
    @include('layouts.footer')

    @stack('page-script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
