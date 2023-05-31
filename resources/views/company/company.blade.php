<!doctype html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
    <meta name="author" content="Holger Koenemann">
    <meta name="generator" content="Eleventy v2.0.0">
    <meta name="HandheldFriendly" content="true">
    <title>Company crud</title>
    @vite(['resources/css/theme.min.css','resources/css/bootstrap.css', 'resources/js/app.js'])
</head>
<body class="d-flex h-100 w-100 bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">
<div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
        <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">
            <header class="mb-auto py-vh-2 col-12">
                <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="/">
                    <div class="flex items-center justify-end mt-4">
                        <form method="POST" action="{{ route('logout') }}" class="float-start">
                            @csrf
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="btn-danger btn-sm ">
                                    {{ __('Log out') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </a>
            </header>
            <main class="mb-auto col-12">
                @include('company.companyList')
            </main>
        </div>
        <div class="col-12 col-md-5 col-lg-6 col-xl-7 gradient">
            @isset($company)
                @include('company.companyDetails')
            @endisset
            @isset($newCompany)
                @include('company.companyCreate')
            @endisset
        </div>
    </div>
</div>
</body>
</html>
