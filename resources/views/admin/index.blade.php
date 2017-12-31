<!DOCTYPE html>
<html>
<head>
  <?php
  if(!isset($login)){
    echo" <meta http-equiv='refresh' content='0;URL= connexion' />";
  }
  ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BioDec| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://demo.itsolutionstuff.com/plugin/clockface.js"></script>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/clockface.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Bio</b>Dec</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-success" id="totalTodos"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span id="totalTodos"></span> messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="message">


                  <!-- end message -->

                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-warning" id="show" ></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span id="totalTodos"></span> messages</li>
              <li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="contact">

                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-xs">Bonjour  :{{$login}}</span><!-- Session login -->
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                <p>
                  <span id="nom" ></span> - <span id="fonction" ></span>

                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="deconnexion" class="btn btn-default btn-flat">Deconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa  fa-group"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/boxed-bg.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$login}} </p>
          <a href="#"><i class="fa fa-circle text-success"></i><span id="profil" ></span></a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" id="menu">


    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        @yield('content')
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2017 <a href="http://www.kb2i.com">KB2I</a>.</strong> powered by SAKRANI hamza & DHAOUEDI mouhamed ali
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-danger" id="user">
    <!-- Create the tabs -->

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="//bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<!--<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>-->
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->

<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script >// <![CDATA[
  setInterval(function(){ $.ajax({
    url: "countavis",
    success: function( response ) {
      var jsonData = JSON.parse(response);
      for (var i = 0; i < jsonData.length; i++) {
        var counter = jsonData[i];
      //  console.log(counter.counter_name);

      }
      $('#totalTodos').text( counter.som);

    }});
  },2000);
  setInterval(function(){ $.ajax({
    url: "listavis",
    success: function( response ) {
      var jsonData = JSON.parse(response);
      $("#message").html('');
      for (var i = 0; i < jsonData.length; i++) {
         $('#message').append('  <li> <div class="pull-left"> <img src="dist/img/user2-160x160.jpg" height=48" width="48" class="img-circle" alt="User Image"> </div>  <h4 id="1">'+jsonData[i].emeteur+'<small> <a href="vu/'+jsonData[i].id_a+'"> <input type="button" value="O" id=""></a>'+jsonData[i].id_a +' 5 mins</small> </h4> <p id="2">'+jsonData[i].theme+'</p>  </li>');
        //  console.log(counter.counter_name);



      }


    }});
  },2000);
  setInterval(function(){ $.ajax({
    url: "countcontact",
    
    success: function( response ) {
      var jsonData = JSON.parse(response);
      for (var i = 0; i < jsonData.length; i++) {
        var counter = jsonData[i];
        //  console.log(counter.counter_name);

      }
      $('#show').text( counter.som);

    }});
  },2000);
  setInterval(function(){ $.ajax({
    url: "listcontact",
    success: function( response ) {
      var jsonData = JSON.parse(response);
      $("#contact").html('');
      for (var i = 0; i < jsonData.length; i++) {
        $('#contact').append('  <li> <div class="pull-left">  <i class="fa fa-warning text-yellow"></i> </div>  <h4 id="1">'+jsonData[i].emeteur+'<small> '+jsonData[i].id_c +' 5 mins</small> </h4> <p id="2">'+jsonData[i].theme+'</p>  </li>');
        //  console.log(counter.counter_name);





      }


    }});
  },2000);
  $.ajax({

    url: "utilisateur",
    success: function( response ) {
      var jsonData = JSON.parse(response);
      $("#user").html('<br>');
      for (var i = 0; i < jsonData.length; i++) {
                $('#user').append('  <li> <a href=""> <label for="inputEmail3" class="control-label">   <p>'+jsonData[i].email +'</p></label></a>  </li>');
        //  console.log(counter.counter_name);



      }


    }});

  $.ajax({

    url: "menu",
    success: function( response ) {
      var jsonData = JSON.parse(response);


      for (var i = 0; i < jsonData.length; i++) {


          $('#menu').append(' <li class="treeview"> <a href="#"> <i class="fa  ' + jsonData[i].icon + '"></i> <span>' + jsonData[i].menu + ' </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a> <ul class="treeview-menu" id="' + jsonData[i].idm + '"> </ul> ');

          //  console.log(counter.counter_name);



      }


    }});
  $.ajax({

    url: "sousmenu",
    success: function( response ) {
      var jsonData = JSON.parse(response);


      for (var i = 0; i < jsonData.length; i++) {


        $("#" + jsonData[i].ids ).append('  <li><a href="' + jsonData[i].url + '"><i class="fa fa-circle-o"></i> ' + jsonData[i].sousmenu + ' </a></li> ');

        //  console.log(counter.counter_name);



      }


    }});
  $.ajax({

    url: "profil",
    success: function( response ) {
      var jsonData = JSON.parse(response);


      for (var i = 0; i < jsonData.length; i++) {


        $('#nom').append( jsonData[i].nom );
        $('#fonction').append( jsonData[i].fonction );
        $('#profil').append(jsonData[i].profil );


      }


    }});

</script>
</html>
