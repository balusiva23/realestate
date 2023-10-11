<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Real Estate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- External CSS libraries -->
     <?php $this->load->view('Frontend/temp/header'); ?>
     <link rel="stylesheet" type="text/css" id="" href="<?php echo base_url(); ?>assets/web/css/skins/default.css"> 
</head>
<body>
<div class="page_loader"></div>

<!-- Top header 3 start -->
<?php $this->load->view('Frontend/temp/navbar'); ?>

<!-- Sidenav start -->
   <?php $this->load->view('Frontend/temp/sidebar'); ?>
<!-- Sidenav end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1><?=$property_data->propertyName?></h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Index</a></li>
                        <li><span>/</span><?=$property_data->propertyName?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-17">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-1"></div> -->
            <div class="col-lg-8 col-md-12 col-xs-12">
                <!-- col-lg-8 col-md-12 col-xs-12 -->
                <div class="properties-details-section">
                    <!-- Heading properties start -->
                    <div class="heading-properties-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3><?=$property_data->propertyName ?></h3>
                                    <p><i class="fa fa-map-marker"></i> <?=$property_data->address?></p>
                                </div>
                                <div class="pull-right">
                                    <?php   if($property_data->propertyStatus == "1") {  ?>
                                        <h3 class="text-right"> <?=$property_data->propertyPrice?> <small></small></h3> 
                                   <?php   }else {  ?>
                                     <h3 class="text-right"><?=$property_data->propertyPrice?><small>/mo</small></h3> 
                                   <?php  } 
                                     ?>
                                    <!-- <h3 class="text-right">$420,00<small>/mo</small></h3> -->
                                    <p><?=$property_data->propertySqft ?>/SqFt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Heading properties end -->

                    <!-- Properties slider section start -->
                    <div class="properties-slider-section">
                        <div class="slider slider-for">
                           <!--  <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-1.jpg" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-2.jpg" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-3.jpg" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-4.jpg" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-4.jpg" class="w-100 img-fluid" alt="photo"></div> -->
                            <?php   if($properties_images){
                             $i = 1;
                             foreach($properties_images as $value){ ?>
                             <div><img src="<?php echo base_url(); ?>assets/uploads/properties/property_images/<?php echo $value->image_path ?>" class="w-100 img-fluid" style="width: 856px;height: 571px;" alt="photo"></div>
                             <?php } } ?>

                        </div>
                        <div class="slider slider-nav">
                            <!-- <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-1.jpg" class="img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-2.jpg" class="img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-3.jpg" class="img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-4.jpg" class="img-fluid" alt="photo"></div>
                            <div><img src="<?php echo base_url(); ?>assets/web/img/properties/properties-5.jpg" class="img-fluid" alt="photo"></div> -->
                                <?php   if($properties_images){
                             $i = 1;
                             foreach($properties_images as $value){ ?>
                             <div><img src="<?php echo base_url(); ?>assets/uploads/properties/property_images/<?php echo $value->image_path ?>" class="img-fluid" style="width: 172px;height: 115px;" alt="photo"></div>
                             <?php } } ?>
                        </div>
                    </div>
                    <!-- Properties slider section end -->

                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-40">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Floor Plans</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-5" data-bs-toggle="tab" data-bs-target="#contact-5" type="button" role="tab" aria-controls="contact-5" aria-selected="false">Location</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-6" data-bs-toggle="tab" data-bs-target="#contact-6" type="button" role="tab" aria-controls="contact-6" aria-selected="false">Video</button>
                            </li>
                           <!--  <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-4" data-bs-toggle="tab" data-bs-target="#contact-4" type="button" role="tab" aria-controls="contact-4" aria-selected="false">Similar Properties</button>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample7">
                                    <div class="accordion-item">
                                        <div class="properties-description mb-50">
                                            <h3 class="heading-2">
                                                Description
                                            </h3>
                                           <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.

                                                Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus. Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p> -->
                                                <p><?=$property_data->description ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample2">
                                    <div class="accordion-item">
                                        <div class="floor-plans mb-50">
                                            <h3 class="heading-2">Floor Plans</h3>
                                           <!--  <table>
                                                <tbody><tr>
                                                    <td><strong>Size</strong></td>
                                                    <td><strong>Rooms</strong></td>
                                                    <td><strong>Bathrooms</strong></td>
                                                    <td><strong>Garage</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>1600</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                </tbody>
                                            </table> -->
                                            <!-- <img src="<?php echo base_url(); ?>assets/web/img/floor-plans.png" alt="floor-plans" class="img-fluid w-100"> -->
                                            <img src="<?php echo base_url(); ?>assets/uploads/properties/<?php echo $property_data->floorimg ?>" alt="floor-plans" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample3">
                                    <div class="accordion-item">
                                        <div class="property-details mb-40">
                                            <h3 class="heading-2">Property Details</h3>
                                            <div class="row">
                                                <!-- properties_details -->
                                                   <?php   if($properties_details){
                                                     $i = 1;
                                                     foreach($properties_details as $value1){ ?>
                                                     <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                           <?= $i.'. '; ?> 
                                                           <?= $value1->details; ?> 
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                                     <?php $i++; } } ?>
                                             <!--    <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Property Id:</strong>215
                                                        </li>
                                                        <li>
                                                            <strong>Price:</strong>$1240/ Month
                                                        </li>
                                                        <li>
                                                            <strong>Property Type:</strong>House
                                                        </li>
                                                        <li>
                                                            <strong>Bathrooms:</strong>3
                                                        </li>
                                                        <li>
                                                            <strong>Bathrooms:</strong>2
                                                        </li>
                                                    </ul>
                                                </div> -->
                                              <!--   <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Property Lot Size:</strong>800 ft2
                                                        </li>
                                                        <li>
                                                            <strong>Land area:</strong>230 ft2
                                                        </li>
                                                        <li>
                                                            <strong>Year Built:</strong>2018
                                                        </li>
                                                        <li>
                                                            <strong>Available From:</strong>2018
                                                        </li>
                                                        <li>
                                                            <strong>Garages:</strong>2
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Sold:</strong>Yes
                                                        </li>
                                                        <li>
                                                            <strong>City:</strong>Usa
                                                        </li>
                                                        <li>
                                                            <strong>Parking:</strong>Yes
                                                        </li>
                                                        <li>
                                                            <strong>Property Owner:</strong>Sohel Rana
                                                        </li>
                                                        <li>
                                                            <strong>Zip Code: </strong>2451
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="tab-pane fade" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
                                <div class="accordion accordion-flush" id="accordionFlushExample5">
                                    <div class="accordion-item">
                                        <div class="location mb-50">
                                            <div class="map">
                                                <h3 class="heading-2">Property Location</h3>
                                                <div id="map" class="contact-map"><iframe src="<?=$property_data->location ?>" allowfullscreen=""></iframe></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-6" role="tabpanel" aria-labelledby="contact-tab-6">
                                <div class="accordion accordion-flush" id="accordionFlushExample6">
                                    <div class="accordion-item">
                                        <div class="inside-properties mb-50">
                                            <h3 class="heading-2">
                                                Property Video
                                            </h3>
                                            <iframe src="<?=$property_data->video ?>" allowfullscreen=""></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabbing box end -->

                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40">
                        <h3 class="heading-2">
                            Condition
                        </h3>
                        <div class="row">

                               <!-- properties_Conditions -->
                                   <?php   if($properties_Conditions){
                                     $i = 1;
                                     foreach($properties_Conditions as $value2){ ?>
                                       <div class="col-md-4 col-sm-4 col-xs-12">
                                    <ul class="condition">
                                        <li >
                                           <!-- <?= $i.'. '; ?>  -->
                                           <?= $value2->conditions; ?> 
                                        </li>
                                      
                                    </ul>
                                </div>
                                 <?php $i++; } } ?>
                         <!--    <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i>2 Bedroom
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Bathroom
                                    </li>
                                </ul>
                            </div> -->
                           <!--  <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square"></i>4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>TV Lounge
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>Balcony
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- Properties condition end -->

                    <!-- Properties amenities start -->
                    <div class="properties-amenities mb-40">
                        <h3 class="heading-2">
                            Features
                        </h3>
                        <div class="row">

                               <!-- properties_features -->

                                <?php   if($properties_features){
                                     $i = 1;
                                     foreach($properties_features as $value3){ ?>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="amenities">
                                        <li >
                                           <!-- <?= $i.'. '; ?>  -->
                                           <?= $value3->features; ?> 
                                        </li>
                                      
                                    </ul>
                                </div>
                                                     <?php $i++; } } ?>
                        <!--     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology"></i>Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-beach"></i>Pool
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays-1"></i>Room service
                                    </li>
                                    <li>
                                        <i class="flaticon-people-2"></i>Gym
                                    </li>
                                </ul>
                            </div> -->
                         <!--    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-connection"></i>Wifi
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-comedy"></i>Home Theater
                                    </li>
                                    <li>
                                        <i class="flaticon-technology-3"></i>Electric
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology-1"></i>Telephone
                                    </li>
                                    <li>
                                        <i class="flaticon-people-3"></i>Jacuzzi
                                    </li>
                                    <li>
                                        <i class="flaticon-clock"></i>Alarm
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-lock"></i>Security
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- Properties amenities end -->

            
                </div>
            </div>
             <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                                    <div class="widget advanced-search">
                        <h3 class="sidebar-title">Contact Us</h3>
                        <form method="Post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                            aria-label="Full Name">
                            </div>
                            <div class="form-group">
                                  <input type="email" name="email" class="form-control"
                                            placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="form-group">
                                 <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            aria-label="Phone Number">
                            </div>
                            <div class="form-group">
                                  <textarea class="form-control" name="message" placeholder="Write message"
                                            aria-label="Write message"></textarea>
                            </div>

                       
                            <div class="form-group mb-0">
                                <button class="btn-4 btn-round-3 w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
         
        </div>
    </div>
</div>
<!-- Properties details page end -->

<!-- Footer start -->

      <?php $this->load->view('Frontend/temp/footer'); ?>

</body>

</html>
