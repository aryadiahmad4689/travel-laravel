<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partial.meta')
    <title>Tiket Pesawat</title>
    @include('layout.partial.link')
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu dashboard" style="background:#ced9ea;">
    @include('layout.partial.header')

    <div class="page-container">
        <div class="page-content-wrapper">
            @yield('content')

            @include('layout.partial.footer')

            @yield('content2')
        </div>
    </div>

    @include('layout.partial.script')
    {{-- @include('sweet::alert') --}}
</body>
</html>
