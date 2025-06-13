<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DIGIMOS Project Tracker')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo/favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <body class="antialiased">
        <div class="wrapper">
            @include('layouts.navbar')
            <div class="page-wrapper">
                @yield('content')
                <footer class="footer footer-transparent d-print-none">
                    <div class="container">
                        <div class="row text-center align-items-center flex-row-reverse">
                            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item">
                                        Copyright &copy; 2025
                                        <a href="." class="link-secondary">Mechtech Instrument Solutions</a>.
                                        All rights reserved.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</body>

</html>
