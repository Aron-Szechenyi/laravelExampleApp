<!doctype html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @vite(['resources/css/theme.min.css','resources/css/bootstrap.css', 'resources/js/app.js'])
</head>
<body class="d-flex h-100 w-100 bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">
<div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
        <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">
            <header class="mb-auto py-vh-2 col-12">
                <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="/">
                    @yield('header')
                </a>
            </header>
            <main class="mb-auto col-12">
                @yield('content_left')
            </main>
        </div>
        <div class="col-12 col-md-5 col-lg-6 col-xl-7 gradient">
            @yield('content_right')
        </div>
    </div>
</div>
</body>
</html>
