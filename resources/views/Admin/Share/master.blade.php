<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.Share.css')
</head>

<body class="sb-nav-fixed">
    @include('Admin.Share.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('Admin.Share.menu')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">@yield('tieu_de')</h1>
                    @yield('noi_dung')
                </div>
            </main>

            @include('Admin.Share.footer')
        </div>
    </div>

    @include('Admin.Share.js')

    @yield('js')
</body>

</html>
