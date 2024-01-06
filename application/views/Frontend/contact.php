<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Contact us</title>
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

    <!-- Sidenav start -->
     <?php $this->load->view('Frontend/temp/sidebar'); ?>
    <!-- Sidenav end -->

    <!-- Sub banner start -->
     <div class="sub-banner" style="background: rgba(0, 0, 0, 0.04) url(<?php echo ($settings->banner_contact) ?  base_url('assets/uploads/banner/').$settings->banner_contact : ''  ?>) top left repeat;background-size: cover; padding: 157px 0 100px; z-index: 1; background-position: center center; background-repeat: no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="#">Index</a></li>
                            <li><span>/</span>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Contact 1 start -->
    <div class="contact-1 content-area-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info">
                        <h3 class="heading">Find Us There</h3>
                        <p class="text">Collaboratively administrate channels whereas virtual. Objectively seize
                            scalable metrics whereas proactive e-services.</p>
                        <div class="contact-info-box d-flex mb-3">
                            <i class="flaticon-technology-1"></i>
                            <div class="detail">
                                <h5 class="mt-0">Phone:</h5>
                                <p><a href="tel:+91 8904681890">+91 8904681890</a></p>
                            </div>
                        </div>
                        <!-- <div class="contact-info-box d-flex mb-3">
                            <i class="flaticon-envelope"></i>
                            <div class="detail">
                                <h5 class="mt-0">Email:</h5>
                                <p><a href="#">info@mail.com</a></p>
                            </div>
                        </div>   -->

                        <div class="contact-info-box d-flex mb-3">
                            <i class="flaticon-envelope"></i>
                            <div class="detail">
                                <h5 class="mt-0">Address :</h5>
                                <p>No 19, B. No 4784/J1/Sf 19, Pride Icon, Gokul Road, Hubli - 580030</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-inner">
                        <h3 class="heading">Get In Touch.</h3>
                        <form id="contact_form" action="#" method="Post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group name">
                                        <input type="text" name="name"id="name" class="form-control" placeholder="Name"
                                            aria-label="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group email">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email Address" aria-label="Email Address">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group subject">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            aria-label="Subject">
                                    </div>
                                </div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            aria-label="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Write message"
                                            aria-label="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="send-btn">
                                        <button type="button" class="btn-4 btn-round-3" id="sendcontact1">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact 1 end -->

    <!-- Google map start -->
    <div class="section">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d61558.57570838357!2d75.08072843053844!3d15.35421273722278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%2346%2C3rd%20floor%2Cpride%20icon%20building%2CGokul%20road%20Hubli%20580030!5e0!3m2!1sen!2sin!4v1690998981480!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Google map end -->

    <!-- Footer start -->
 
    <!-- Footer start -->
     <?php $this->load->view('Frontend/temp/footer'); ?>

     
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
    <script>
        function LoadMap(propertes) {
            var defaultLat = 40.7110411;
            var defaultLng = -74.0110326;
            var mapOptions = {
                center: new google.maps.LatLng(defaultLat, defaultLng),
                zoom: 15,
                scrollwheel: false,
                styles: [
                    {
                        featureType: "administrative",
                        elementType: "labels",
                        stylers: [
                            { visibility: "off" }
                        ]
                    },
                    {
                        featureType: "water",
                        elementType: "labels",
                        stylers: [
                            { visibility: "off" }
                        ]
                    },
                    {
                        featureType: 'poi.business',
                        stylers: [{ visibility: 'off' }]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'labels.icon',
                        stylers: [{ visibility: 'off' }]
                    },
                ]
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var infoWindow = new google.maps.InfoWindow();
            var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });
            (function (marker) {
                google.maps.event.addListener(marker, "click", function (e) {
                    infoWindow.setContent("" +
                        "<div class='map-properties contact-map-content'>" +
                        "<div class='map-content'>" +
                        "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                        "<ul class='map-properties-list'> " +
                        "<li><i class='fa fa-phone'></i>  +0477 8556 552</li> " +
                        "<li><i class='fa fa-envelope'></i>  info@themevessel.com</li> " +
                        "<li><a href='#'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                        "</ul>" +
                        "</div>" +
                        "</div>");
                    infoWindow.open(map, marker);
                });
            })(marker);
        }
        LoadMap();
    </script>

</body>

     <script>
     $(document).on('click','#sendcontact1',function(){

        event.preventDefault();
           $("#contact_form").valid();
           var email = $("#email").val();
           var name=$("#name").val();
            
           

        if(email != '' && name != ''  ){ // 
          
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Home/contactus_mail");?>',
        data: new FormData($("#contact_form")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#contact_form')[0].reset();

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