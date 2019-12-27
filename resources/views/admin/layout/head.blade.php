<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name', 'DcRegina')}}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!--gallery css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<!--details css-->
<link rel="stylesheet" href="{{URL::asset('admin/dist/css/view.css')}}">
<!-- select field-->

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{URL::asset('admin/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/summernote/summernote-bs4.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css 'rel="stylesheet" type='text/css'>
<!--custom fonts-->
<link href="{{URL::asset('user/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

<!--datatable-->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

<!-- Ekko Lightbox -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/ekko-lightbox/ekko-lightbox.css')}}">
<!--toogle css-->
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

<!-- fullCalendar -->
<link rel="stylesheet" href="{{URL::asset('admin/plugins/fullcalendar/main.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.css">
<link rel="stylesheet" href="{{URL::asset('admin/plugins/fullcalendar-daygrid/main.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('admin/plugins/fullcalendar-timegrid/main.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('admin/plugins/fullcalendar-bootstrap/main.min.css')}}">

<!-- jQuery -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{URL::asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--script type="text/javascript" src="{{URL::asset('admin/dist/js/pages/dashboard.js')}}"></script-->
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{URL::asset('admin/dist/js/demo.js')}}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{URL::asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- fullCalendar 2.2.5 -->
<script type="text/javascript"  src="{{URL::asset('admin/plugins/moment/moment.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('admin/plugins/fullcalendar/main.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/fullcalendar-daygrid/main.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/fullcalendar-timegrid/main.min.js')}}"></script>
<script type="text/javascript"  src="{{URL::asset('admin/plugins/fullcalendar-interaction/main.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('admin/plugins/fullcalendar-bootstrap/main.min.js')}}"></script>
<!--toogle css-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@section('head-content')

@show
