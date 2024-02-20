<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    {{-- <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard"> --}}
    <title>@yield('title')</title>
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png"> --}}
    <link rel="icon" href="/img/woilah.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <!-- Main styles for this application-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/simplebar.css">
</head>

<body>
    @include('layouts.partial.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="/icons/sprites/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="/assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="/img/pfp.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="/icons/sprites/free.svg#cil-settings"></use>
                                </svg>Settings</a>
                            <form action="/logout" method="POST" class="dropdown-item">
                                @csrf
                                <button type="submit" class="btn-logout">
                                    <svg class="icon me-2">
                                        <use xlink:href="/icons/sprites/free.svg#cil-account-logout">
                                        </use>
                                    </svg>Logout</button>
                            </form>
                            <style>
                                .btn-logout {
                                    margin: 0;
                                    padding: 0;
                                    background: transparent;
                                    border: none;
                                    color: var(--cui-dropdown-link-color);
                                }

                                .btn-logout:active {
                                    background: transparent;
                                    border: none;
                                }

                                .btn-logout::selection {
                                    background: transparent;
                                    border: none;
                                }
                            </style>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="px-3 wrapper d-flex flex-column min-vh-100 bg-light">
            @yield('content')
        </div>
        <footer class="footer">
            <div>&copy;Eureka</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/js/coreui.bundle.min.js"></script>
    <script src="/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="node_modules/chart.js/dist/chart.min.js"></script>
    <script src="/chartjs/dist/js/coreui-chartjs.js"></script> --}}
    <script src="/js/coreui-utils.js"></script>
    <script src="/js/main.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}
</body>

</html>
