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