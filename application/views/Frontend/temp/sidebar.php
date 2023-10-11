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
              <!--       <li><a href="#" class="pt0">Index <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="#">Index 01</a></li>
                            <li><a href="index-2.html">Index 02</a></li>
                            <li><a href="index-3.html">Index 03</a></li>
                            <li><a href="index-4.html">Index 04</a></li>
                            <li><a href="index-5.html">Index 05</a></li>
                            <li><a href="index-6.html">Index 06</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Listings <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">Listing Grid <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="grid-view.html">Grid View 1</a></li>
                                    <li><a href="grid-view-2.html">Grid View 2</a></li>
                                    <li><a href="grid-view-3.html">Grid View 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Listing List <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="list-view.html">List View 1</a></li>
                                    <li><a href="list-view-2.html">List View 2</a></li>
                                    <li><a href="list-view-3.html">List View 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Listing Half <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="map-view.html">Map View 1</a></li>
                                    <li><a href="map-view-2.html">Map View 2</a></li>
                                    <li><a href="map-view-3.html">Map View 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Property <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="single-property.html">Single Property 1</a></li>
                                    <li><a href="single-property-2.html">Single Property 2</a></li>
                                    <li><a href="single-property-3.html">Single Property 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Agents <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="agent-grid.html">Agent Grid 1</a></li>
                            <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                            <li><a href="agent-list.html">Agent List 1</a></li>
                            <li><a href="agent-detail.html">Agent Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="active">Pages <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">About <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="about.html">About 1</a></li>
                                    <li><a href="about-2.html">About 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="services-1.html">Services 1</a></li>
                                    <li><a href="services-2.html">Services 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="pricing-tables.html">Pricing Tables 1</a></li>
                                    <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                    <li><a href="pricing-tables-3.html">Pricing Tables 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gallert <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="gallery-1.html">Gallery 1</a></li>
                                    <li><a href="gallery-2.html">Gallery 2</a></li>
                                    <li><a href="gallery-3.html">Gallery 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Typography <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="typography.html">Typography 1</a></li>
                                    <li><a href="typography-2.html">Typography 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="faq.html">Faq 1</a></li>
                                    <li><a href="faq-2.html">Faq 2</a></li>
                                    <li><a href="faq-3.html">Faq 3</a></li>
                                </ul>
                            </li>
                            <li><a href="property-comparison.html">Property Comparison</a></li>
                            <li><a href="search-brand.html">Property Brands</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="icon.html">Icon</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li>
                                <a href="#">My Profile <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="my-profile.html">My Profile</a></li>
                                    <li><a href="my-property.html">My Property</a></li>
                                    <li><a href="favorited-property.html">Favorited Property</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages 404 <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="404.html">Pages 404</a></li>
                                    <li><a href="404-2.html">Pages 404 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Login <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-full-grid.html">Full Grid</a></li>
                                    <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-full-list.html">Full List</a></li>
                                    <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-detail.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="contact.html">Contact 1</a></li>
                            <li><a href="contact-2.html">Contact 2</a></li>
                            <li><a href="contact-3.html">Contact 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="submit-property.html">Submit Property</a>
                    </li>
                </ul>
            </div> -->
            <div class="get-in-touch">
                <h3 class="heading">Get in Touch</h3>
                <div class="get-in-touch-box d-flex">
                    <i class="flaticon-technology-1"></i>
                    <div class="detail">
                       <a href="tel:<?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?>"> <?php echo ($settings->top_bar_phone) ?  $settings->top_bar_phone : '' ?> </a>
                    </div>
                </div>
                <div class="get-in-touch-box d-flex">
                    <i class="flaticon-envelope"></i>
                    <div class="detail">
                        <a href="mailto:<?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?>"><?php echo ($settings->top_bar_email) ?  $settings->top_bar_email : '' ?> </a>
                    </div>
                </div>
          
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