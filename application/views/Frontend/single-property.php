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
                              <?php   if($get_floors){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Floor Plans</button>
                            </li>
                        <?php }  ?>
                        <!-- $property_data->location -->
                          <?php   if($properties_details){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Details</button>
                            </li>
                              <?php  }  if($property_data->location){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-5" data-bs-toggle="tab" data-bs-target="#contact-5" type="button" role="tab" aria-controls="contact-5" aria-selected="false">Location</button>
                            </li>
                              <?php  } if($property_data->video){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-6" data-bs-toggle="tab" data-bs-target="#contact-6" type="button" role="tab" aria-controls="contact-6" aria-selected="false">Video</button>
                            </li>
                            <?php }  ?>
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
                                      
                                       <!-- <img src="<?php echo base_url(); ?>assets/uploads/properties/<?php echo $property_data->floorimg ?>" alt="floor-plans" class="img-fluid w-100"> -->
                                       <!--   856 / 434    -->

                                 <?php
                                if ($get_floors) {
                                  //  print_r($get_floors);die();
                                    $i = 0; // Counter for carousel items
                                    ?>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <?php foreach (array_reverse($get_floors) as $key => $value) { ?>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key; ?>" class="<?php echo ($key == 0) ? 'active' : ''; ?>" aria-current="<?php echo ($key == 0) ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $key + 1; ?>"></button>
                                            <?php } ?>
                                        </div>
                                        <div class="carousel-inner">
                                            <?php foreach (array_reverse($get_floors) as $value) { ?>
                                                <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                                                    <img src="<?php echo base_url(); ?>assets/uploads/properties/floor_image/<?php echo $value->image_path ?>" alt="floor-plans" class="img-fluid w-100" style="height: 440px;">
                                                </div>
                                                <?php
                                                $i++;
                                            } ?>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="width: 65px; height: 65px; line-height: 65px; z-index: 100; background: #15151530; top: 45%; margin: 10px; color: #fff; opacity: 1; border-radius: 100px;">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                <?php } ?>

<!--  -->
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
                                            <!-- <iframe src="<?=$property_data->video ?>" allowfullscreen=""></iframe> -->
                                            
                                            <video width="850" height="360" controls>
                                                    <source src="assets/uploads/properties_videos/<?php echo $property_data->video; ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
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
                        
                        </div>
                    </div>
                    <!-- Properties amenities end -->

            
                </div>
            </div>
             <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                                    <div class="widget advanced-search">
                        <h3 class="sidebar-title">Contact Us</h3>
                        <form method="Post" id="contactform1">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            aria-label="Full Name">
                            </div>
                            <div class="form-group">
                                  <input type="email" name="email" id="email" class="form-control"
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
                                <button type="button" class="btn-4 btn-round-3 w-100" id="sendcontactbtn">Submit</button>
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
     <script>

       var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleIndicators'), {
        interval: 2000 // Set to 2000 milliseconds (2 seconds)
    });
         
     $(document).on('click','#sendcontactbtn',function(){

        event.preventDefault();
           $("#contactform1").valid();
           var email = $("#email").val();
           var name=$("#name").val();
            
           

        if(email != '' && name != ''  ){ // 
          
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Home/contactus_mail");?>',
        data: new FormData($("#contactform1")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#contactform1')[0].reset();

        $.wnoty({
        type: 'success',
        message: 'Thank you for contactus!',
        autohideDelay: 1000,
        position: 'top-right'

        });
        // setTimeout(function(){
        // window.location.href = '<?php echo base_url()?>'+data.url;
        // },1000);
         setTimeout(function(){
            location.reload(true);
            },2000);
       }else if(data.status == 'error'){
      
              $.wnoty({
                    type: 'error',
                    message: data.message,
                    autohideDelay: 1000,
                    position: 'top-right'

                    });
               setTimeout(function(){
                window.location.href = '<?php echo base_url()?>';
                },2000);
        }
        },
        });
        }
     
        return false;
        })



</script>
</html>
