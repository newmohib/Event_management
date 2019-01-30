 
 <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Mohibur Rahman</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">R</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="../index.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="home.php?page=adminssion_form"> <i class="icon-form"></i>Deshboard</a></li>
             
             <li><a href="#applicant" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Applicant </a>
              <ul id="applicant" class="collapse list-unstyled ">
                <li><a href="index.php?page=applicant&apply=form">Apply Form</a></li>
                <li><a href="index.php?page=applicant&apply=view">view</a></li>
                <li><a href="index.php?page=applicant&apply=ok&result=result_show_ind">Result Show</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
             
             <li><a href="#students" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Students </a>
              <ul id="students" class="collapse list-unstyled ">
                <li><a href="index.php?final_student=student&student=admission_payment_form">Admission Payment</a></li>
                <li><a href="index.php?final_student=student&student=final_student_info">Student Informatin</a></li>
                <li><a href="home.php?page=students">view</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            
            <li><a href="#schedule" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Schedule</a>
              <ul id="schedule" class="collapse list-unstyled ">
                <li><a href="#">Create</a></li>
                <li><a href="#">View</a></li>
                <li><a href="#">Manage</a></li>
              </ul>
            </li>

            <li><a href="#guardian" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Guardian </a>
              <ul id="guardian" class="collapse list-unstyled ">
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