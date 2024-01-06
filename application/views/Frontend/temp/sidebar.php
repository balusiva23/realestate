    <nav id="sidebar" class="nav-sidebar">
        <!-- Close btn-->
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <!-- <img src="<?php echo base_url(); ?>assets/web/img/logos/logo.png" alt="sidebarlogo"> -->
                    <?php if($settings->logo){ ?>
                        <a href="#"><img src="<?php echo base_url(); ?>assets/uploads/logo/<?php echo $settings->logo ?>" alt="logo"></a> 
                         <?php }else{ ?>}
                         <a href="#"><img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="default logo"></a>
                          <?php } ?>
            </div>
            <div class="sidebar-navigation">
                <h3 class="heading">Pages</h3>
                <ul class="menu-list">

                         <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>About" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Services" id="navbarDropdownMenuLink11"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>

                        </li>
                        <li class="nav-item dropdown megamenu-li">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>Properties" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Properties</a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>ContactUs" id="navbarDropdownMenuLink8"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact Us
                            </a>

                        </li>
             
            <div class="get-in-touch">
                <h3 class="heading">Get in Touch</h3>
                 <a class="btn-2" href="#" class="Openconditionsmodal" data-bs-toggle="modal" data-bs-target="#conditionsmodal">Contact Us</a>
                <!-- <div class="get-in-touch-box d-flex">
                    <i class="flaticon-technology-1"></i>
                    <div class="detail">
                       <a href="tel:<?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?>"> <?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?> </a>
                    </div>
                </div> -->
                <!-- <div class="get-in-touch-box d-flex">
                    <i class="flaticon-envelope"></i>
                    <div class="detail">
                        <a href="mailto:<?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?>"><?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?> </a>
                    </div>
                </div> -->
          
            </div>
         <!--    <div class="get-social">
                <h3 class="heading">Get Social</h3>
                <a href="#" class="facebook-bg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter-bg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="google-bg">
                    <i class="fa fa-google"></i>
                </a>
                <a href="#" class="linkedin-bg">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div> -->
        </div>
    </nav>