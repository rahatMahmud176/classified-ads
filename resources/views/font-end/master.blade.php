<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title') ||Calssimax</title>
  <link rel="icon" type="image/x-icon" href="/font-end/images/fav-icon-tangail-hat.png">


@include('font-end.includes.styles')


</head>

<body class="body-wrapper">


@include('font-end.includes.nav')


@yield('main-content')






<!--============================
=            Footer            =
=============================-->

@include('font-end.includes.footer')
 
@include('font-end.includes.scripts')

</body>

</html>



