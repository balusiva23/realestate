<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Home</title>
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
    <!-- Main header end -->

    <!-- Sidenav start -->
      <?php $this->load->view('Frontend/temp/sidebar'); ?>
    <!-- Sidenav end -->

    <!-- Sub banner start -->
   <div class="sub-banner" style="background: rgba(0, 0, 0, 0.04) url(<?php echo ($settings->banner_properties) ?  base_url('assets/uploads/banner/').$settings->banner_properties : ''  ?>) top left repeat;background-size: cover; padding: 157px 0 100px; z-index: 1; background-position: center center; background-repeat: no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>All Properties</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="#">Index</a></li>
                            <li><span>/</span>Properties</li>
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
                <p>Our Ongoging Projects</p>
                <h1>Our Properties</h1>
            </div>
            <!-- Grid view start -->
            <div class="row">
                 <div class="col-lg-8 col-md-12 col-xs-12">
                 <div class="row filter_data">
                    <!-- Properties -->

                 


<!-- 
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <?php //echo $links; ?>
                    </nav>
                </div>  -->
             

                </div>
                  <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example" id="pagination_link">
                      
                    </nav>
                </div>
            </div>
           <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                                    <div class="widget advanced-search">
                        <!-- <h3 class="sidebar-title">Filter by status</h3> -->
                        <form method="POST" id="property-filter-form">
                        <!--     <div class="form-group">
                                <select class="selectpicker search-fields"  name="propertyStatus">
                                    <option>All Status</option>
                                    <option value="1">For Sale</option>
                                    <option value="2">For Rent</option>
                                </select>
                            </div> -->
                            <!-- Status -->
                        <h3 class="sidebar-title">Filter by status</h3>
                       <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox1" type="checkbox" class="common_selector sale" value="1" name="sale">
                        <label for="checkbox1">
                           For Sale
                        </label>
                       </div> 
                              <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox" value="2" class="common_selector rent" name="rent"> 
                                <label for="checkbox2">
                                  For Rent
                                </label>
                           </div>  
                           <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox3" type="checkbox" value="3" class="common_selector lease" name="lease"> 
                            <label for="checkbox3">
                              For Lease 
                            </label>
                           </div>   
                                  <!-- City -->
                        <h3 class="sidebar-title">Filter by city</h3>
                    

                         <?php 
                         foreach ($get_cities as  $value) { ?>
                               <div class="checkbox checkbox-theme checkbox-circle">
                        <!-- <option value="<?= $value->id ?>"><?= $value->city; ?></option> -->
                        <input id="cityCheckbok_<?= $value->id ?>" type="checkbox" class="common_selector city"  name="city" value="<?= $value->id; ?>">
                        <label for="cityCheckbok_<?= $value->id ?>">
                          <?= $value->city; ?>
                        </label>
                          </div> 
                        <?php  }
                           ?>


                        <!-- <input id="checkbox1" type="checkbox" class="common_selector sale" value="1" name="sale">
                        <label for="checkbox1">
                           For Sale
                        </label> -->

                     
                   
                        
                            <div class="faq-info other-features">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                  <!--      <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Show More Options
                                            </button>
                                        </h2>  -->
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <h3 class="sidebar-title">Features</h3>
                                            <!--     <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">
                                                        Free Parking
                                                    </label>
                                                </div> -->
                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="form-group mb-0">
                                <button class="btn-4 btn-round-3 w-100" type="submit">Search</button>
                            </div> -->
                        </form>
                    </div>
                

                    </div>
                    </div>





            </div>
            <!-- Grid view end -->
        </div>
    </div>
    <!-- Service section 2 end -->









    <!-- Footer start -->
      <?php $this->load->view('Frontend/temp/footer'); ?>

      <script>
// $(document).ready(function() {
//     $('#property-filter-form').submit(function(event) {
//         event.preventDefault();

//         // Serialize form data
//         var formData = $(this).serialize();

//         // AJAX request to reload property listings with filters
//         $.ajax({
//             type: 'POST', // Change the method to POST
//             url: '<?php echo base_url('Properties'); ?>',
//             data: formData,
//             success: function(response) {
//                 // Update property listings container with the filtered data
//                 $('#property-listings').html(response);
//             },
//             error: function(xhr, status, error) {
//                 console.log(error);
//             }
//         });
//     });
// });
</script>
<style>
#loading
{
    text-align:center; 
    background: url('<?php echo base_url(); ?>assets/loader2.gif') no-repeat center; 
    height: 150px;
 
}
</style>

<script>
$(document).ready(function(){

     

    filter_data(1);

    function filter_data(page)
    {
           
     

        $('.filter_data').html('<div id="loading" style="" ></div>');
        $('#pagination_link').hide();
        var action = 'fetch_data';
        //var page = 1;
    
        var sale = get_filter('sale');
        var rent = get_filter('rent');
        var lease = get_filter('lease');
        var city = get_filter('city');
        //console.log(city)
        $.ajax({
            url:"<?php echo base_url(); ?>Home/fetch_data/"+page,
            method:"POST",
            dataType:"JSON",
            //data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            data:{action:action, sale:sale, rent:rent,lease:lease,city:city},
            success:function(data)
            {
                 $('.filter_data').html(data.product_list);
                 $('#pagination_link').show();
                       // $('#pagination_link').html(data.pagination_link);
                        $('.pagination-box #pagination_link').html(data.pagination_link);
                       
                       // console.log(data.pagination_link)
                  
               
            }
        })
    }

    // $('#price_range').slider({
    //     range:true,
    //     min:1000,
    //     max:65000,
    //     values:[1000, 65000],
    //     step: 500,
    //     stop:function(event, ui){
    //         //$('#price_show').show();
    //         $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
    //         $('#hidden_minimum_price').val(ui.values[0]);
    //         $('#hidden_maximum_price').val(ui.values[1]);
    //         filter_data(1);
    //     }
    // });

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        filter_data(page);
    });

    $('.common_selector').click(function(){
        filter_data(1);
    });



});
</script>
</body>
</html>