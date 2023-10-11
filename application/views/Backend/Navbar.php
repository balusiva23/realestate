 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="" style="width: 150px;height: auto;max-height:unset;">
    <!-- <span class="d-none d-lg-block" style="font-size: 18px;"></span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li> --><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/default.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $admin_data->name; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <!-- <img src="<?php echo base_url(); ?>assets/default.png" alt="Profile" class="rounded-circle" style="width: 40px;"> -->
              <h6><?php echo $admin_data->name; ?></h6>
              <span><?php echo $admin_data->email; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

        <!--     <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>



            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>dashboard/Profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
             <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>Login/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <style type="text/css">
  	.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;

  color: white;
  background: white;
  text-align: center;
	}
	.error{
		color: red;
	}
  th{
    text-align: center !important;
  }
  td{
    text-align: center !important;
  }
  .method{
    width: 20% !important;
  }

 .dataTable {
    /* Set the width as needed */
    white-space: nowrap;
   }

  </style>