<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('admin/layout/head')
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      @include('admin/layout/header')
      @include('admin/layout/sidebar')

      @yield('content')
      <footer class="main-footer">
        @include('admin/layout/footer')
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

  </body>
</html>
