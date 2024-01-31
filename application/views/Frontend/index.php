<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>19Square</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
     <?php $this->load->view('Frontend/temp/header'); ?>
 
</head>

<body>
    <div class="page_loader"></div>

    <!-- Top header 3 start -->
     <?php $this->load->view('Frontend/temp/navbar'); ?>
    <!-- Main header end -->

    
      <?php $this->load->view('Frontend/temp/sidebar'); ?>


    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Banner -->
                
                  <?php if (!empty($home_banners)): 
                  $i = 1;
                  foreach ($home_banners as $key =>$member) { ?>

                <div class="carousel-item item-bg <?php echo ($key === 0) ? ' active' : ''; ?>">
                    <img class="d-block w-100 h-100" src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $member->banner_img ?>" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                        <div class="carousel-content container align-self-center">
                            <div class="banner-info2">
                                <div class="text-l">
                                    <h3><?=$member->title; ?></h3>
                                    <p><?=$member->sub_title; ?></p>
                                    <a class="btn-2" href="#">Get Started Now</a>
                                    <a class="btn-1" href="#"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
                <?php endif; ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Banner end -->


    <!-- Featured Properties start -->
    <div class="featured-properties content-area-9 comon-slick">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Best Rent Properties</p>
                <h1>Featured Properties</h1>
            </div>
            <div class="slick row comon-slick-inner csi2 wow fadeInUp delay-04s"
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
              
                <!-- get_properties -->

                  <?php if (!empty($get_properties)): 
                  $i = 1;
                  foreach ($get_properties as $key =>$property) { ?>

                <div class="item slide-box">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="<?php echo base_url('SingleProperty?I=').$property->id; ?>" class="property-img">
                                <div class="listing-badges">
                                    <!-- <span class="featured">For Rent</span> -->
                                   <?php  if($property->propertyStatus == "1") {  echo  " <span class='featured'>For Sale</span>"; }else {  echo "<span class='featured'For Rent</span>"; } ?>

                                </div>
                                <div class="price-ratings-box">
                                    <h4 class="price">
                                        <!-- &#8377;540,000 -->
                                        <?php     if($property->propertyStatus == "1") { 
                                       echo ' '.$property->propertyPrice.'<span>/mo</span>';
                                     }else {  
                                     echo ''.$property->propertyPrice.'';
                                    } ?>
                                    </h4>
                                </div>
                                <div class="property-overflow">
                                    <img class="d-block w-100" src="<?php echo base_url(); ?>assets/uploads/properties/thumnail/<?php echo $property->thumnail; ?>" alt="properties" style="width: 410px;height: 288px;">
                                </div>
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="<?php echo base_url('SingleProperty?I=').$property->id; ?>"><?=$property->propertyName ?></a>
                            </h1>
                            <div class="location">
                                <a href="<?php echo base_url('SingleProperty?I=').$property->id; ?>">
                                    <i class="fa fa-map-marker"></i><?=$property->address ?>
                                </a>
                            </div>
                        
                        </div>
                        <div class="footer clearfix">
                            <div class="pull-left agent">

                            </div>
                            <div class="pull-right days">
                                <p><a href="<?php echo base_url('SingleProperty?I=').$property->id; ?>"> Read More </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
                <?php endif; ?>
            
               
                          </div>
            <div class="text-center">
                <a href="<?php echo base_url(); ?>Properties" class="button btn-3">
                    Browse More Properties
                </a>
            </div>
        </div>
    </div>
    <!-- Featured Properties end -->

    <!-- Service section 2 start -->
    <div class="services-3 bg-grea-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center wow fadeInLeft delay-04s">
                    <div class="text">
                        <div class="main-title mt3">
                            <p>Our Expertise</p>
                            <h1>Why Choose Us</h1>
                        </div>
                        <p>At 19square, we are dedicated to providing you with exceptional real estate
                            services
                            and making your property journey a seamless and rewarding experience.<br><br>
                            <a href="#">Read More</a>
                        </P>
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight delay-04s">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-2">
                                <div class="number">1</div>
                                <div class="icon">
                                    <i class="flaticon-apartment"></i>
                                </div>
                                <div class="service-info-2-ditels">
                                    <h3><a href="services-1.html">Comprehensive Property Listings:</a></h3>
                                    <P> Explore a vast range of residential and
                                        commercial properties in the most sought-after locations.</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-2">
                                <div class="number">2</div>
                                <div class="icon">
                                    <i class="flaticon-internet"></i>
                                </div>
                                <div class="service-info-2-ditels">
                                    <h3><a href="services-1.html">Expert Guidance:</a></h3>
                                    <P>Our team of experienced real estate professionals is here
                                        to offer you expert advice and support throughout your property journey.</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-2">
                                <div class="number">3</div>
                                <div class="icon">
                                    <i class="flaticon-vehicle"></i>
                                </div>
                                <div class="service-info-2-ditels">
                                    <h3><a href="services-1.html">Market Insights:</a></h3>
                                    <P>Stay informed about the latest market trends, property
                                        prices, and investment opportunities with our in-depth market analyses.</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="service-info-2">
                                <div class="number">4</div>
                                <div class="icon">
                                    <i class="flaticon-coins"></i>
                                </div>
                                <div class="service-info-2-ditels">
                                    <h3><a href="services-1.html">Property Valuation:</a></h3>
                                    <P>For sellers, we offer accurate property valuation services
                                        to determine the optimal price for your property,..</P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section 2 end -->

    <!-- Popular Places strat -->
    <!-- <div class="popular-places content-area-8">
        <div class="container">
          
            <div class="main-title">
                <p>Find Your City</p>
                <h1>Most Popular Places</h1>
            </div>
            <div class="row wow">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInLeft delay-04s col-pad">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/web/img/popular-places/popular-places-4.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="listings_no">47 Properties</div>
                                <div class="ling-section">
                                    <h3>
                                        <a href="#">Mysuru</a>
                                    </h3>
                                    <p>Friendly neighborhood</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInLeft delay-04s col-pad">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/web/img/popular-places/popular-places-1.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="listings_no">24 Properties</div>
                                <div class="ling-section">
                                    <h3>
                                        <a href="#">Hubballi</a>
                                    </h3>
                                    <p>The big apple</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 wow fadeInUp delay-04s col-pad">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/web/img/popular-places/popular-places-2.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="listings_no">64 Properties</div>
                                <div class="ling-section">
                                    <h3>
                                        <a href="#">Ballari</a>
                                    </h3>
                                    <p>The Best City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 wow fadeInRight delay-04s col-pad">
                    <div class="popular-places-box">
                        <div class="popular-places-overflow">
                            <div class="popular-places-photo">
                                <img class="img-fluid big" src="<?php echo base_url(); ?>assets/web/img/popular-places/popular-places-3.jpg"
                                    alt="popular-places">
                            </div>
                        </div>
                        <div class="listings_no">76 Properties</div>
                        <div class="ling-section">
                            <h3>
                                <a href="#">Udupi</a>
                            </h3>
                            <p>Best place to live!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="featured-properties content-area-9 comon-slick">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                 <p>Find Your City</p>
                <h1>Most Popular Places</h1>
            </div>
            <div class="slick row comon-slick-inner csi2 wow fadeInUp delay-04s"
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
              
                <!-- get_properties -->

                  <?php
                
                  
                  if (!empty($get_cities)): 
                  $i = 1;
                  foreach ($get_cities as $key =>$city) { 
                  // print_r($get_cities);
                    $count = $this->db->where(array('city'=> $city->id,'isActive'=> 1))->from('properties')->count_all_results();

                    ?>

                <div class="item slide-box">
                    <div class="property-box">
                    <div class="popular-places-box" style="margin:0px">
                            <div class="popular-places-overflow">
                                <div class="popular-places-photo">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/uploads/city/thumnail/<?= $city->thumnail; ?>"
                                        alt="popular-places">
                                </div>
                            </div>
                                <div class="listings_no"><?= $count; ?> Properties</div>
                                <div class="ling-section">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>Properties?I=<?= $city->id; ?>"><?= $city->city; ?></a>
                                    </h3>
                                    <p><?= $city->desc; ?></p>
                                </div>
                            </div>
                    </div>
                </div>
                <?php $i++; } ?>
                <?php endif; ?>
            
               
                          </div>
            <div class="text-center">
                <!-- <a href="<?php echo base_url(); ?>Properties" class="button btn-3">
                    Browse More Properties
                </a> -->
            </div>
        </div>
    </div>
    <!-- Popular places end -->

    <!-- Counters 3 strat -->
    <div class="counters-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center wow fadeInLeft delay-04s">
                    <div class="heading">
                        <P>Our Experience</P>
                        <h1>More than 10 Years of Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight delay-04s">
                    <div class="infos clearfix">
                        <div class="counter-box b-button b-right d-flex">
                            <div class="icon">
                                <i class="flaticon-tag"></i>
                            </div>
                            <div class="detail">
                                <h1 class="counter Starting">967</h1>
                                <p>Properties Sold</p>
                            </div>
                        </div>
                        <div class="counter-box b-button d-flex">
                            <div class="icon">
                                <i class="flaticon-business"></i>
                            </div>
                            <div class="detail">
                                <h1 class="counter">1276</h1>
                                <p>Workers Employed</p>
                            </div>
                        </div>
                        <div class="counter-box b-right d-flex">
                            <div class="icon">
                                <i class="flaticon-people"></i>
                            </div>
                            <div class="detail">
                                <h1 class="counter">396</h1>
                                <p>Awards Wining</p>
                            </div>
                        </div>
                        <div class="counter-box d-flex">
                            <div class="icon">
                                <i class="flaticon-people-1"></i>
                            </div>
                            <div class="detail">
                                <h1 class="counter">177</h1>
                                <p>Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters 3 end -->

    <!-- Our team 2 start -->
    <div class="our-team-2 content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Our Professionals</p>
                <h1>Meet Our Skilled Team</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="team-1">
                        <div class="team-inner">
                            <div class="team-overflow">
                                <div class="team-photo">
                                    <div class="team-img">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-7.jpg" alt="agent-2" class="img-fluid w-100">
                                        </a>
                                    </div>
                                    <ul class="social-list clearfix">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h5><a href="agent-detail.html">Martin Smith</a></h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="team-1">
                        <div class="team-inner">
                            <div class="team-overflow">
                                <div class="team-photo">
                                    <div class="team-img">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-6.jpg" alt="agent-2" class="img-fluid w-100">
                                        </a>
                                    </div>
                                    <ul class="social-list clearfix">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="team-1">
                        <div class="team-inner">
                            <div class="team-overflow">
                                <div class="team-photo">
                                    <div class="team-img">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-8.jpg" alt="agent-2" class="img-fluid w-100">
                                        </a>
                                    </div>
                                    <ul class="social-list clearfix">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h5><a href="agent-detail.html">Maria Blank</a></h5>
                                <p>Office Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="team-1">
                        <div class="team-inner">
                            <div class="team-overflow">
                                <div class="team-photo">
                                    <div class="team-img">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-5.jpg" alt="agent-2" class="img-fluid w-100">
                                        </a>
                                    </div>
                                    <ul class="social-list clearfix">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h5><a href="#">Karen Paran</a></h5>
                                <p>Support Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our team 2 end -->

    <!-- Testimonial 4 start -->
    <div class="testimonial-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 bg-image"></div>
                <div class="col-lg-6 col-md-12 col-pad bg-grea-3">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <?php if (!empty($get_testimonial)): 
                              $i = 1;
                              foreach ($get_testimonial as $key =>$review) { ?>

                            <div class="carousel-item <?php echo ($key === 0) ? ' active' : ''; ?>">
                                <div class="testimonial-info">
                                    <div class="main-title">
                                        <p>Testimonials</p>
                                        <h1>Customer Reviews</h1>
                                    </div>
                                    <p class="text"><?=$review->comments; ?></p>
                                    <div class="avatar">
                                        <img src="<?php echo base_url(); ?>assets/uploads/testimonials/<?php echo $review->customer_image ?>" alt="testimonial-user"> 
                                        <!-- <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-1.jpg" alt="testimonial-user"> -->
                                    </div>
                                    <h4><?=$review->customer_name; ?></h4>
                                    <p class="job"><?=$review->customer_position; ?></p>
                                </div>
                            </div>
                             <?php $i++; } ?>
                             <?php endif; ?>

                        <!--     <div class="carousel-item active">
                                <div class="testimonial-info">
                                    <div class="main-title">
                                        <p>Testimonials</p>
                                        <h1>Customer Reviews</h1>
                                    </div>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text everLorem
                                        industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text
                                        of the printing. as been the industry</p>
                                    <div class="avatar">
                                        <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-1.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Karen Paran</h4>
                                    <p class="job">CEO, Brick Consulting</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-info">
                                    <div class="main-title">
                                        <p>Testimonials</p>
                                        <h1>Customer Reviews</h1>
                                    </div>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text everLorem
                                        industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text
                                        of the printing. as</p>
                                    <div class="avatar">
                                        <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-3.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Carolyn Stone</h4>
                                    <p class="job">Web Designer, Uk</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-info">
                                    <div class="main-title">
                                        <p>Testimonials</p>
                                        <h1>Customer Reviews</h1>
                                    </div>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text everLorem
                                        industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text.
                                    </p>
                                    <div class="avatar">
                                        <img src="<?php echo base_url(); ?>assets/web/img/avatar/avatar-4.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Michelle Nelson</h4>
                                    <p class="job">Designer</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial 4 end -->


    <br><br><br><br>
    <!-- Partners strat -->
    <div class="partners bg-grea-3">
        <div class="container">
            <h4>Brands <span>& Partners</span></h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-slider slide-box-btn">
                           <?php if (!empty($get_brands)): 
                              $i = 1;
                              foreach ($get_brands as $key =>$brands) { ?>
                              <div class="custom-box"><img src="<?php echo base_url(); ?>assets/uploads/brands/<?php echo $brands->brand_logo ?>" alt="brand"></div>
                             <?php $i++; } ?>
                             <?php endif; ?>
                      <!--   <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-1.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-2.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-3.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-4.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-5.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-6.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-1.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-2.png" alt="brand"></div>
                        <div class="custom-box"><img src="<?php echo base_url(); ?>assets/web/img/brand/brand-3.png" alt="brand"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners end -->


  <?php $this->load->view('Frontend/temp/footer'); ?>
</body>



</html>