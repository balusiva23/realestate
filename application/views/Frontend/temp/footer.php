    <!-- Footer start -->
    <footer class="footer-1">
        <div class="container footer-inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item">
                        <h4>Contact Us</h4>
                        <ul class="contact-info">
                            <li>
                                <?php echo ($settings->footer_location) ?  $settings->footer_location : '' ?>
                                <!-- #46,3rd floor,pride icon building,Gokul road Hubli 580030 -->
                            </li>
                            <li>
                                <a href="mailto: <?php echo ($settings->footer_email) ?  $settings->footer_email : '' ?>"> <?php echo ($settings->footer_email) ?  $settings->footer_email : '' ?></a>
                                 <!-- <a href="mailto:sales@hotelempire.com">info@mail.com</a> -->
                            </li>
                            <li>
                                <a href="tel:<?php echo ($settings->footer_phone) ?  $settings->footer_phone : '' ?>"><?php echo ($settings->footer_phone) ?  $settings->footer_phone : '' ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-item">
                     <!--    <h4>Properties Types</h4>
                        <ul class="links">
                            <li>
                                <a>Apartment</a>
                            </li>
                            <li>
                                <a>Restaurant</a>
                            </li>
                            <li>
                                <a>My Houses</a>
                            </li>
                            <li>
                                <a>Villa & Condo</a>
                            </li>
                            <li>
                                <a>Family House</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-item">
                        <h4>Quick Links</h4>
                        <ul class="links">
                            <li>
                                <a href="<?php echo base_url(); ?>About">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Services">Services</a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(); ?>Properties" >Properties Details</a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url(); ?>ContactUs" >Contact Us</a>
                            </li>
                           <!--  <li>
                                <a>My Account</a>
                            </li> -->
                            <!-- <li>
                                <a> Privacy Policy</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item clearfix">
                        <h4>About Us</h4>
                        <p><?php echo ($settings->footer_content) ?  $settings->footer_content : '' ?></p>
                            <!-- <p>At 19square, we are dedicated to providing you with exceptional real estate services
                                                        and making your property journey a seamless and rewarding experience. Whether
                                                        you are buying, selling, renting, or investing in real estate, we are here to guide you
                                                        every step of the way.</p>
                             -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Sub footer start -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy">19Square © 2023 <a href="#"> </a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub footer end -->

    <!-- Full Page Search -->


    <script src="<?php echo base_url(); ?>assets/web/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/bootstrap-submenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/rangeslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.scrollUp.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/leaflet-providers.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/leaflet.markercluster.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.filterizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/jquery.countdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/maps.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/sidebar.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/app.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/web/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script src="<?php echo base_url(); ?>assets/web/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-89110077-3', 'auto');
        ga('send', 'pageview');
    </script>