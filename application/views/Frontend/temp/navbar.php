 <div class="top-header-3 d-none d-lg-block" id="top-header-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="top-logo">
                        <?php if($settings->logo){ ?>
                        <a href="#"><img src="<?php echo base_url(); ?>assets/uploads/logo/<?php echo $settings->logo ?>" alt="logo"></a> 
                         <?php }else{ ?>}
                         <a href="#"><img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="default logo"></a>
                          <?php } ?>
                        <!-- <a href="#"><img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="logo"></a> -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="top-header-inner" style="    padding: 30px 0;justify-content: right;">
                       <div class="text-right">
                          <a class="btn-2" href="#" class="Openconditionsmodal" data-bs-toggle="modal" data-bs-target="#conditionsmodal">Contact Us</a>
                           </div>
                    <!--     <div class="top-contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <div class="content">
                                <p>Our Location</p>
                                <a href="#"
                                    target="blank"><?php echo ($settings->top_bar_location) ?  $settings->top_bar_location : '' ?> </a>
                                   
                            </div>
                        </div>
                        <div class="top-contact-item">
                            <i class="bi bi-envelope-open"></i>
                            <div class="content">
                                <p>Online Support</p>
                                <a href="mailto:<?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?>"><?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?> </a>
                              
                            </div>
                        </div>
                        <div class="top-contact-item tci2">
                            <i class="bi bi-telephone-inbound"></i>
                            <div class="content">
                                <p>Free Contact</p>
                                <a href="tel:<?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?>"> <?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?> </a>
                                
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top header 3 end -->

    <!-- Main header start -->
    <header class="main-header sticky-header header-fixed main-header-5" id="main-header-6">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logos mr-auto" href="#">
                    <img src="<?php echo base_url(); ?>assets/web/img/logos/logo-2.png" alt="logo" class="logo-photo">
                </a>
                <button class="navbar-toggler" id="drawer" type="button">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="navbar-collapse collapse w-100" id="navbar">
                    <ul class="navbar-nav w-100 justify-content-start">
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
                    </ul>


                </div>
            </nav>
        </div>
    </header>