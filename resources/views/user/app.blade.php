<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>home</title>

@include('user/layout/head')
</head>

<body id="page-top">

  @include('user/layout/header')

    @section('main-content')

    @show

  <!-- Footer -->
  <footer class="footer">
    @include('user/layout/footer')
  </footer>

</body>

</html>
