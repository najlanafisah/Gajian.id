<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bendahara</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mystyle/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-icon">
    <style>
        html, body {
            height: 100%;
            font-family: "Poppins", sans-serif;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="bg-grey">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.0/dist/sweetalert2.all.min.js"></script>

</body>