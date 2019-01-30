

<!--<?php  // echo base_url();?>index.php/--> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>University</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/vendor/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet his self-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>core_templete/css_js/css/custom.css">
    <!-- for google foont extra -->
       <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
       <!-- for date time extra -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="<?php echo base_url();?>core_templete/date_time/build/css/bootstrap-datetimepicker.min.css">
         

         <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Rancho|Inconsolata|Droid+Sans|Cabin Sketch&effect=fire-animation|anaglyph|brick-sign|canvas-print|crackle|decaying|destruction|distressed|distressed-wood|emboss|fire|fire-animation|fragile|grass|mitosis|neon|outline|putting-green|scuffed-steel|shadow-multiple|splintered|static|stonewash|3d|3d-float|vintage|wallpaper ">
          <!-- font family      Playfair Display|Monoton|Arapey|Russo one|Tangerine|VT323|Hammersmith one|Ultra|Marck Script|Cabin Sketch|Cormorant-->
          <!-- effect      effect=fire-animation|anaglyph|brick-sign|canvas-print|crackle|decaying|destruction|distressed|distressed-wood|emboss|fire|fire-animation|fragile|grass|mitosis|neon|outline|putting-green|scuffed-steel|shadow-multiple|splintered|static|stonewash|3d|3d-float|vintage|wallpaper-->

    <!-- for google foont extra closs -->
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>core_templete/img/myimg/favicon.ico">
    
  </head>
  <body>
 <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>core_templete/img/myimg/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <p class="font-effect-fire-animation font_style_extra2">Mhibur Rahman</p>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">R</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="../index.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/event/deshboard/deshboard_controller"> <i class="icon-form"></i>Deshboard</a></li>
            <li><a href="#role" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Role</a>
              <ul id="role" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url();?>index.php/event/role/Role_controller">Create</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/role/Role_controller/role_show_all_controller">View</a></li>
                <li><a href="home.php?page=role&roles=manage">Manage</a></li>
              </ul>
            </li>
            <li><a href="http://localhost/complete_all_project/event/calendar/calendar.php"> <i class="icon-grid"></i>Calendar</a></li>
            <li><a href="#client" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Client</a>
              <ul id="client" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url();?>index.php/event/client/Client_controller">Client Signup</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/client/Client_controller/client_show_all_controller">View All Client</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#employee" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Employee </a>
              <ul id="employee" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url();?>index.php/event/employee/employee_controller">Employee Signup</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/employee/employee_controller/employee_show_all_controller">View All Employee</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
           <li><a href="#event" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Event </a>
              <ul id="event" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller">Event Create</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller/event_transport_form">Event Transport</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller/event_guid_form">Event guid</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller/event_performers_form">Event performers</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller/event_speker_form">Event speaker</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/new_event/event_controller/event_payment_show_form">Event Pyment</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#plicant" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Ticket </a>
              <ul id="plicant" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url();?>index.php/event/ticket/ticket_controller">Purches</a></li>
                <li><a href="<?php echo base_url();?>index.php/event/ticket/ticket_controller/purchase_ticket_view/1">View</a></li>
                <li><a href="home.php?page=students">page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#guardian" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Guardian </a>
              <ul id="guardian" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#user" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>User </a>
              <ul id="user" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#others" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Others </a>
              <ul id="others" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="#Resource" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Resource </a>
              <ul id="Resource" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="page">