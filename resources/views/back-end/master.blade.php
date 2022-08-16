<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> @yield('title')-TangailHatt</title>

        @include('back-end.includes.styles')
    </head>
    <body class="sb-nav-fixed">
        @include('back-end.includes.nav')
        <div id="layoutSidenav">
            @include('back-end.includes.sidebar')
            <div id="layoutSidenav_content">
                @yield('main-content')
               @include('back-end.includes.footer')
            </div>
        </div>
       @include('back-end.includes.scripts')
    </body>
</html>
