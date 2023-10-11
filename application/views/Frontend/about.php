<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>19Square</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
      <!-- External CSS libraries -->
     <?php $this->load->view('Frontend/temp/header'); ?>
</head>

<body>
    <div class="page_loader"></div>

    <!-- Top header 3 start -->
     <?php $this->load->view('Frontend/temp/navbar'); ?>
    <!-- Main header end -->
          <?php $this->load->view('Frontend/temp/sidebar'); ?>

    <!-- Sub banner start -->
    <div class="sub-banner" style="background: rgba(0, 0, 0, 0.04) url(<?php echo ($settings->banner_about) ?  base_url('assets/uploads/banner/').$settings->banner_about : ''  ?>) top left repeat;background-size: cover; padding: 157px 0 100px; z-index: 1; background-position: center center; background-repeat: no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>About Us</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="#">Index</a></li>
                            <li><span>/</span>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- About real estate start -->
    <div class="about-real-estate content-area-5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                        <div class="about-text clearfix">
                            <!-- Main title -->
                            <div class="main-title-2">
                                <p>Best Properties</p>
                                <h1>Welcome to 19square</h1>
                            </div>
                            <!-- paragraph -->
                            <p class="mb-30"> At 19square, we are dedicated to providing you with exceptional real
                                estate services
                                and making your property journey a seamless and rewarding experience. Whether
                                you are buying, selling, renting, or investing in real estate, we are here to guide you
                                every step of the way.</p>

                            <h4>Our Mission:</h4>
                            <p>Our mission is to empower our clients with the knowledge and
                                resources they need to make informed decisions in the ever-changing real estate
                                market. We strive to exceed expectations by delivering personalized and
                                professional services, all while maintaining the highest standards of integrity and
                                transparency.</p>

                            <h4>Who We Are:</h4>
                            <p>19square is a team of passionate and skilled real estate experts who
                                share a common vision: to redefine the way people perceive the real estate industry.
                                We are not just agents; we are your trusted advisors, committed to building lasting
                                relationships with our clients and helping them achieve their real estate goals.</p>



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="hotels-detail-slider simple-slider">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url(); ?>assets/web/img/properties/properties-12.jpg" class="d-block w-100"
                                            alt="about-photo">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url(); ?>assets/web/img/properties/properties-9.jpg" class="d-block w-100"
                                            alt="about-photo">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url(); ?>assets/web/img/properties/properties-11.jpg" class="d-block w-100"
                                            alt="about-photo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About real estate end -->


    <!-- Service section 2 start -->
    <div class="services-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Our Expertise</p>
                <h1>What We Offer:</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">1</div>
                        <div class="icon">
                            <i class="flaticon-lock"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="#">Comprehensive Property Listings:</a>
                            </h3>
                            <P> Explore a vast range of residential and
                                commercial properties in the most sought-after locations. Our up-to-date
                                property listings feature detailed descriptions, high-quality images, and virtual
                                tours to give you a clear picture of each property.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">2</div>
                        <div class="icon">
                            <i class="flaticon-technology"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="#">Expert Guidance:</a>
                            </h3>
                            <P> Our team of experienced real estate professionals is here
                                to offer you expert advice and support throughout your property journey.
                                Whether you are a first-time buyer, an experienced investor, or a seller looking
                                to maximize your returns, we tailor our services to meet your unique needs.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">3</div>
                        <div class="icon">
                            <i class="flaticon-apartment"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="#">Market Insights:</a>
                            </h3>
                            <P>Stay informed about the latest market trends, property
                                prices, and investment opportunities with our in-depth market analyses. Our
                                insights will help you make informed decisions and stay ahead in the
                                competitive real estate landscape.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">4</div>
                        <div class="icon">
                            <i class="flaticon-internet"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="#">Property Valuation:</a>
                            </h3>
                            <P>For sellers, we offer accurate property valuation services
                                to determine the optimal price for your property, ensuring a successful sale
                                within your timeframe.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">5</div>
                        <div class="icon">
                            <i class="flaticon-vehicle"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="#">Property Management:</a>
                            </h3>
                            <P>Landlords can benefit from our comprehensive
                                property management services, ensuring hassle-free management of their
                                rental properties, from tenant screening to maintenance and rent collection.</P>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service section 2 end -->

    <!-- Services 2 start -->
    <div class="services-2 content-area bg-grea-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Our Expertise</p>
                <h1>Why Choose Us:</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="service-info-5">
                        <div class="icon">
                            <div class="service-i">
                                <i class="lnr lnr-thumbs-up"></i>
                            </div>
                        </div>
                        <h4>
                            <a href="#">Client-Centric Approach:</a>
                        </h4>
                        <p>We put our clients at the heart of everything we
                            do. Your satisfaction is our top priority, and we go the extra mile to understand
                            your needs and deliver personalized solutions. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="service-info-5">
                        <div class="icon">
                            <div class="service-i">
                                <i class="flaticon-apartment"></i>
                            </div>
                        </div>
                        <h4>
                            <a href="#">Expertise and Experience:</a>
                        </h4>
                        <p>With years of experience in the real estate
                            industry, our team possesses the knowledge and expertise to navigate even
                            the most complex real estate transactions. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="service-info-5">
                        <div class="icon">
                            <div class="service-i">
                                <i class="flaticon-vehicle"></i>
                            </div>
                        </div>
                        <h4>
                            <a href="#">Integrity and Transparency:</a>
                        </h4>
                        <p> We believe in building trust through honesty
                            and transparency. You can rely on us to provide straightforward and candid
                            advice at all times. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="service-info-5">
                        <div class="icon">
                            <div class="service-i">
                                <i class="flaticon-coins"></i>
                            </div>
                        </div>
                        <h4>
                            <a href="#">Tech-Driven Solutions:</a>
                        </h4>
                        <p>Embracing the latest technologies, we leverage
                            cutting-edge tools and digital platforms to enhance your real estate
                            experience and streamline the process.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="service-info-5">
                        <div class="icon">
                            <div class="service-i">
                                <i class="lnr lnr-hand"></i>
                            </div>
                        </div>
                        <h4>
                            <a href="#">Community Involvement:</a>
                        </h4>
                        <p>We are not just invested in the real estate market;
                            we are also committed to giving back to the communities we serve through
                            charitable initiatives and community involvement.</p>
                    </div>
                </div>
            </div>
            <p>Thank you for choosing 19square. Whether you are buying, selling, renting, or
                investing, we are here to support you every step of the way. Get in touch with our
                team today and let&#39;s make your real estate dreams a reality!</p>
        </div>
    </div>
    <!-- Services 2 end -->

    <!-- Our team 2 start -->
    <div class="our-team-2 content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Our Professionals</p>
                <h1>Meet Our Skilled Team</h1>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="team-2 df-box">
                        <div class="team-photo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-1.jpg" alt="team-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="team-details">
                            <h5><a href="agent-detail.html">Martin Smith</a></h5>
                            <p>Creative Director</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="team-2 df-box">
                        <div class="team-photo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-2.jpg" alt="team-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="team-details">
                            <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                            <p>Office Manager</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="team-2 df-box">
                        <div class="team-photo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-3.jpg" alt="team-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="team-details">
                            <h5><a href="agent-detail.html">Maria Blank</a></h5>
                            <p>Support Manager</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="team-2 df-box">
                        <div class="team-photo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-4.jpg" alt="team-2" class="img-fluid">
                            </a>
                        </div>

                        <div class="team-details">
                            <h5><a href="agent-detail.html">Maria Blank</a></h5>
                            <p>Support Manager</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our team 2 end -->






    <!-- Footer start -->
     <?php $this->load->view('Frontend/temp/footer'); ?>

</body>



</html>