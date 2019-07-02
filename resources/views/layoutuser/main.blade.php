<!DOCTYPE html>
<html lang="en">
<head>
    @include('layoutuser.partial.meta')
    <title>Tiket Pesawat</title>
    @include('layoutuser.partial.link')
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu dashboard " style="background:#ced9ea;">
    @include('layoutuser.partial.header')

    <div class="page-container">
     
        <div class="page-content-wrapper">
            @yield('content')

            @include('layoutuser.partial.footer')

            @yield('content2')
        </div>
       
    </div>

    @include('layoutuser.partial.script')
    {{-- @include('sweet::alert') --}}
</body>
</html>
