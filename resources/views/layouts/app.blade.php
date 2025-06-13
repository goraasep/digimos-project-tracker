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
        @if (session('success'))
            <div class="alert alert-success alert-dismissible position-fixed end-0 me-3 mt-3" style="z-index: 99;"
                role="alert">
                <div class="d-flex">
                    <div class="me-3 mt-3 mb-3">
                        <div class="alert-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon alert-icon icon-2">
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="alert-title">Success</h4>
                        <div class="text-muted">{{ session('success') }}</div>
                    </div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible position-fixed end-0 me-3 mt-3" style="z-index: 99;"
                role="alert">
                <div class="d-flex">
                    <div class="me-3 mt-3 mb-3">
                        <div class="alert-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon alert-icon icon-2">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M12 8v4"></path>
                                <path d="M12 16h.01"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="alert-title">Success</h4>
                        <div class="text-muted">{{ session('error') }}</div>
                    </div>
                </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
        @endif
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
