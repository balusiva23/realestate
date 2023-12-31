<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Real Estate</title>
  <?php $this->load->view('header'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- ======= Navbar ======= -->
 <?php $this->load->view('Backend/Navbar'); ?>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
   <?php $this->load->view('Backend/Sidebar'); ?>
<!-- End Sidebar-->
 <style type="text/css">
 	.center{
 		text-align: center;
 	}
 </style>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Testimonials</h1>
      <nav>
     <!--    <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol> -->
      </nav>
    </div><!-- End Page Title -->

    <!-- <section class="section">
      <div class="row">
        <div class="col-lg-12">
        	<div class="text-right m-2" style="display: flex; justify-content: end;">
        		 <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Testimonial</button>
        	</div>
      
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testimonials</h5>
           
               <div  style="overflow-x: auto;">
             
                <table class="table  table-striped table-bordered table-hover" id="example4" width="100%">
                <thead>
                  <tr>
		                <th class="center">S.No</th>
		              
		                <th class="center"> Name </th>
                        <th class="center">  Designation </th>
                        <th class="center">  profile </th>
                        <th class="center" style="width:25%"> Comments </th>
                        <th class="center"> Position </th>
                        <th class="center"> Update / Delete </th>
		           
		            </tr>
                </thead>
               <tbody>
                  <?php 
                           $i = 1;
                            foreach ($get_datas as $member) {?>
                              <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                <td class="center"> <?=$i; ?></td>
                                  <td class="center">   <?=$member->customer_name; ?></td>
                                  <td class="center">   <?=$member->customer_position; ?></td>
                                <td class="center"> <img src="<?php echo base_url(); ?>assets/uploads/testimonials/<?php echo $member->customer_image ?>" alt="" class="img-fluid" style="width: 150px;"></td>
                                 
                                <td class="center">   <?=$member->comments; ?></td>
                             
                                <td class="center">   <?=$member->position; ?></td>
                    
                         
                                <td class="center">
                                    <a href="#" class="tblEditBtn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#Editverticalycentered" data-id="<?php echo $member->id; ?>">
                                        <i class="fa fa-pencil" ></i>
                                    </a> 
                                    <a class="tblDelBtn"  data-id="<?php echo $member->id; ?>">
                                        
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            
                            </tr>



                            <?php $i++; } ?>
                        
                </tbody> 
              </table>
          

              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->
        <section class="section mb-5">
      <div class="row">
        <div class="col-lg-12">
         <div class="text-right m-2" style="display: flex; justify-content: end;">
                 <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Testimonial</button>
            </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testimonials</h5>
            

              <!-- Table with stripped rows -->
              <div class=" table-responsive">
              <table class="table  table-striped table-bordered table-hover datatable" id="testimonial-table">
                <thead>
                  <tr>
             
                       <th class="center" >S.No</th>
                      
                        <th class="center"> Name </th>
                        <th class="center">  Designation </th>
                        <th class="center">  profile </th>
                        <th class="center" style="width:15%"> Comments </th>
                        <th class="center"> Position </th>
                        <th class="center"> Action </th>
                  </tr>
                </thead>
                 <tbody>
                  <?php 
                           $i = 1;
                            foreach ($get_datas as $member) {
                                   $intro = $member->comments;
                                    $intro_words = explode(' ', $intro);
                                    $intro_short = implode(' ', array_slice($intro_words, 0, 10));
                                    $intro_remaining = implode(' ', array_slice($intro_words, 10));

                                ?>
                              <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                <td class="center"> <?=$i; ?></td>
                                  <td class="center">   <?=$member->customer_name; ?></td>
                                  <td class="center">   <?=$member->customer_position; ?></td>
                                <td class="center"> <img src="<?php echo base_url(); ?>assets/uploads/testimonials/<?php echo $member->customer_image ?>" alt="" class="img-fluid" style="width: 50px;"></td>
                                 
                                <td class="center" style="text-align: justify;width:15%">         
                                    <span class="intro-short"><?php echo $intro_short; ?></span>
                                                                <?php if (!empty($intro_remaining)) { ?>
                                                                    <span class="intro-more" style="display: none;cursor: pointer;"><?php echo $intro_remaining; ?></span>
                                                                    <a class="read-more-btn" style="cursor: pointer;" onclick="toggleIntro(this)">Read More</a>
                                                                <?php } ?></td>
                             
                                <td class="center">   <?=$member->position; ?></td>
                    
                         
                                <td class="center">
                                    <a href="#" class="tblEditBtn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#Editverticalycentered" data-id="<?php echo $member->id; ?>">
                                        <i class="fa fa-pencil" ></i>
                                    </a> 
                                    <a class="tblDelBtn"  data-id="<?php echo $member->id; ?>">
                                        
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            
                            </tr>



                            <?php $i++; } ?>
                        
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  <!-- Add  Testimonial-->
	<div class="modal fade" id="verticalycentered" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Add Testimonial</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	           <form action="#" id="member_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-body">
               <div class="row ">
                <div class="col-md-12">
                 <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Name<span class="error">* </span></label>
                <input type="text" name="customer_name" data-required="1" placeholder="Customer Name" class="form-control" id="customer_name" required /> 
                </div>
                 <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Designation<span class="error"> </span></label>
                <input type="text" name="customer_position" data-required="1" placeholder="Customer Designation" class="form-control" id="customer_position"  />
                </div>
                <div class="form-group mt-2">
                   <label for="inputName" class="form-label">Customer Image<span class="error">* </span></label><br>
                <input type="file" name="customer_image" id="customer_image">
                </div>   
                <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Reviews<span class="error"> </span></label>
                <textarea type="text" name="comments" data-required="1" placeholder="Customer Reviews" class="form-control" id="comments"  required></textarea>
                </div>

                 <div class="form-group mt-2">
                   <label for="inputName" class="form-label">Testimonial Position<span class="error">* </span></label><br>
                <input type="number" name="position" data-required="1" placeholder="Testimonial Position" class="form-control" id="position"  required/>
                </div>
               
            </div>

          
            </div>
          
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="save_member">Save</button>
          </div>
        </form>
	      </div>
	    </div>
	  </div> 
	   <!-- Edit Testimonial -->
	<div class="modal fade" id="Editverticalycentered" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
            <!-- modal-lg -->
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Update Testimonial</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
    	      <form action="#" id="Editmember_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="modal-body">
               <div class="row ">
                <div class="col-md-12">
                 <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Name<span class="error"> * </span></label>
                <input type="text" name="customer_name" data-required="1" placeholder="Customer Name" class="form-control" id="customer_name" required /> 
                </div>
                 <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Designation<span class="error"> </span></label>
                <input type="text" name="customer_position" data-required="1" placeholder="Customer Designation" class="form-control" id="customer_position"  />
                </div>
                <div class="form-group mt-2">
                   <label for="inputName" class="form-label">Customer Image<span class="error"> * </span></label><br>
                <input type="file" name="customer_image" id="customer_image" required>
                </div>   
                <div class="form-group mt-2">
                <label for="inputName" class="form-label">Customer Reviews<span class="error"> </span> *</label>
                <textarea type="text" name="comments" data-required="1" placeholder="Customer Reviews" class="form-control" id="comments"  required></textarea>
                </div>

                 <div class="form-group mt-2">
                   <label for="inputName" class="form-label">Testimonial Position<span class="error">* </span></label><br>
                <input type="number" name="position" data-required="1" placeholder="Testimonial Position" class="form-control" id="position"  required />
                </div>
               
            </div>

          
            </div>
          
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="update_member">Save</button>
          </div>
        </form>
	      </div>
	    </div>
	  </div><!-- End Vertically centered Modal-->  

   






  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <!-- footerContent -->

  <?php $this->load->view('Backend/footerContent'); ?>
      <!-- End Footer -->

  <?php $this->load->view('footer'); ?>

  <script type="text/javascript">


  //home banner

 $(document).on('click','#save_member',function(){
        event.preventDefault();
    
              $("#member_form_add").valid();
      

           if( $("#customer_name").val() != '' && $("#customer_image").val() != ''&& $("#position").val() != '' ){ 

            $.ajax({
            type:'post',
            url: '<?php echo base_url("Dashboard/add_testimonial");?>',
            data: new FormData($("#member_form_add")[0]),
            contentType: false,
            processData: false, 
            success:function(resp){
            var data=$.parseJSON(resp);
            if(data.status == 'success'){
            $('#member_form_add')[0].reset();
       
             $('#verticalycentered').modal('hide');
             $(".modal-backdrop").remove();

            $.wnoty({
            type: 'success',
            message: data.message,
            autohideDelay: 1000,
            position: 'top-right'

            });
          
              setTimeout(function(){
            location.reload(true);
            },2000);
        
        }else if(data.status == 'error'){
                $.wnoty({
                        type: 'error',
                        message: data.message,
                        autohideDelay: 2000,
                        position: 'top-right'

                        });
                setTimeout(function(){
            location.reload(true);
            },2000);
            }
            },
            });
        }
        
            return false;
      
        })
    //get banner by id
     $(document).ready(function() {
            $('#testimonial-table').on('click', '.tblEditBtn', function() {
                // Get the data attributes from the button
                var id = $(this).data('id');
               // $('.modal-title').text("Edit Banner")
                // Make an AJAX request to retrieve the data for the ID
                $.ajax({
                    url: '<?php echo base_url("Dashboard/getTestimonialByID"); ?>?id=' + id, // Adjust the URL to match your product retrieval endpoint
                    method: 'GET',
                    //data: { id: id },
                    dataType: 'json',
                    success: function(response) {
                        // Populate the modal with the data returned from the server
                        $('#Editverticalycentered [name="id"]').val(response.id);
                        $('#Editverticalycentered [name="customer_name"]').val(response.customer_name);
                        $('#Editverticalycentered [name="customer_position"]').val(response.customer_position);
                        $('#Editverticalycentered [name="position"]').val(response.position);
                        $('#Editverticalycentered [name="comments"]').text(response.comments);
                       

                        // Open the modal
                        $('#Editverticalycentered').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.log(error); // Handle the error if any
                    }
                });
            });
        });





         $(document).on('click','#update_member',function(){
                event.preventDefault();
                
                $("#Editmember_form_add").valid();
           

                $.ajax({
                type:'post',
                url: '<?php echo base_url("Dashboard/update_testimonial");?>',
                data: new FormData($("#Editmember_form_add")[0]),
                contentType: false,
                processData: false, 
                success:function(resp){
                var data=$.parseJSON(resp);
                if(data.status == 'success'){
                $('#Editmember_form_add')[0].reset();
                 $('#Editverticalycentered').modal('hide');
                 $(".modal-backdrop").remove();


                $.wnoty({
                type: 'success',
                message: "Product Updated successfully",
                autohideDelay: 1000,
                position: 'top-right'

                });

                 setTimeout(function(){
                 location.reload(true);
                },2000);
               
               }else if(data.status == 'error'){
                      $.wnoty({
                            type: 'error',
                            message: data.message,
                            autohideDelay: 2000,
                            position: 'top-right'

                            });
                       setTimeout(function(){
                 location.reload(true);
                },2000);


                }
                },
                });
               
             
                return false;
                })

         // Delete Banner
          //delete
        $(document).on('click','.tblDelBtn', function (e) {
        //var id = $(this).parents('tr').find('#id').val();
        var id = $(this).attr('data-id');
       $.confirm({
        title: 'Delete Warning!',
        content: 'Are you sure, you want to delete ?',
        boxWidth: '25%',
        useBootstrap: false,
        buttons: {
        delete: {
        text: 'Delete',
        btnClass: 'btn-primary',
        action: function(){
        $.ajax({
        type: 'post',
        url: '<?php echo base_url('Dashboard/DeleteTestimonial') ?>',
        data: {id:id},
        success: function (response) {
         var data=$.parseJSON(response);
         if(data.status == 'success'){

        $.wnoty({
        type: 'success',
        message: data.message,
        autohideDelay: 1000,
        position: 'top-right'

        });
        setTimeout(function(){
             location.reload(true);
            },2000);
         }
        } 
       });
        }
        },
        close: function () {
        }
        }
        });

        });    





function toggleIntro(button) {
    var row = button.closest('tr');
    var introShort = row.querySelector('.intro-short');
    var introMore = row.querySelector('.intro-more');
    
    if (introMore.style.display === 'none') {
        introShort.style.display = 'none';
        introMore.style.display = 'inline';
        button.textContent = 'Read Less';
    } else {
        introShort.style.display = 'inline';
        introMore.style.display = 'none';
        button.textContent = 'Read More';
    }
}


</script>

</body>

</html>