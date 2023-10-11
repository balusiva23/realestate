<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>Home</title>
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

    <!-- Sidenav start -->
      <?php $this->load->view('Frontend/temp/sidebar'); ?>
    <!-- Sidenav end -->

    <!-- Sub banner start -->
   <div class="sub-banner" style="background: rgba(0, 0, 0, 0.04) url(<?php echo ($settings->banner_service) ?  base_url('assets/uploads/banner/').$settings->banner_service : ''  ?>) top left repeat;background-size: cover; padding: 157px 0 100px; z-index: 1; background-position: center center; background-repeat: no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>Services</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="#">Index</a></li>
                            <li><span>/</span>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Service section 2 start -->
    <div class="services-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <p>Our Expertise</p>
                <h1>Our Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">1</div>
                        <div class="icon">
                            <i class="lnr lnr-home"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="services-1.html">Buy house, plot&land</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">2</div>
                        <div class="icon">
                            <i class="lnr lnr-apartment"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="services-1.html">Rent properties sell/rent</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
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
                                <a href="services-1.html">Commercial properties</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
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
                                <a href="services-1.html">New projects</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">5</div>
                        <div class="icon">
                            <i class="fa fa-newspaper-o" aria-hidden="true" title="Copy to use newspaper-o"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="services-1.html">Rent agreement free listening</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">6</div>
                        <div class="icon">
                            <i class="flaticon-coins"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="services-1.html">Legal& registeration</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-info-2">
                        <div class="number">6</div>
                        <div class="icon">
                            <i class="flaticon-coins"></i>
                        </div>
                        <div class="service-info-2-ditels">
                            <h3>
                                <a href="services-1.html">Loan services</a>
                            </h3>
                            <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section 2 end -->









    <!-- Footer start -->
    <?php $this->load->view('Frontend/temp/footer'); ?>
</body>



</html>