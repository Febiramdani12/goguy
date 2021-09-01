<!DOCTYPE html>
<html lang="en">
@laravelPWA
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- Style -->
    @stack('prepend-style')
    @include('includes/style')
    @stack('addon-style')
    <!-- /Style -->

</head>

<body>

    <!-- Navbar -->
    @include('includes.navbar')
    <!-- /Navbar -->



    <!-- PageContent -->
    @yield('content')
    <!-- /PageContent -->



    <!-- Footer -->
    @include('includes.footer')
    <!-- /Footer -->

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes/script')
    @stack('addon-script')
    {{-- /Script --}}
</body>

</html>



<!-- 
    <nav class="collapse navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down">
    <div class="container">
    <a href="/index.html" class="navbar-brand">
        <img src="/images/logo.svg">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive"></div>
    </div>
</nav>

-->