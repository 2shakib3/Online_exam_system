<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Css link  -->
    @include('Backend.Admin_dashboard.inc.Csslink')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('Backend.Admin_dashboard.inc.nav')
    <div class="row">

    @include('Backend.Admin_dashboard.inc.side')
    @yield('content')

    </div>



  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
    <!-- js link file -->
    @include('Backend.Admin_dashboard.inc.jslinkfile')
</body>
</html>
