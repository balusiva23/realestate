<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Real Estate</title>
  <?php $this->load->view('header'); ?>
  <style type="text/css">
      .table-responsive {
         overflow-x: auto;  /* Enable horizontal scrolling */
         max-width: 100%;   /* Set the maximum width to 100% of the container */
        }
        .datatable thead th {
          width: 100%;
          white-space: nowrap; /* Prevent text from wrapping */
        }
          .datatable tr:last-child td {
            border-bottom: 1px solid #d9d9d9;
          }
          .datatable-wrapper.no-footer .datatable-container {
             border-bottom: 0px solid #fff;
          }
  </style>
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
      <h1>View Properties</h1>
      <nav>
    
      </nav>
    </div><!-- End Page Title -->

        <section class="section mb-5">
      <div class="row">
        <div class="col-lg-12">
         <div class="text-right m-2" style="display: flex; justify-content: end;">
                 <!-- <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Testimonial</button> -->
                  <a href="<?php echo base_url(); ?>dashboard/AddProperties"  type="button" class="btn btn-outline-primary ">Add Properties</a>
            </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Properties</h5>
            

              <!-- Table with stripped rows -->
              <div class=" table-responsive">
              <table class="table  table-striped table-bordered table-hover datatable" id="testimonial-table" style="width:100%">
                <thead>
                  <tr>
             
                       <th class="center" >S.No</th>
                      
                        <th class="center"> Property Name </th>
                        <th class="center">  Property Status </th>
                        <th class="center"> Property Type </th>
                        <th class="center">  Area/Location(SqFt) </th>
                        <th class="center">  Sale or Rent Price </th>
                        <th class="center">  Thumnail </th>
                         <!-- new -->
                          <th class="center"> Property Images </th>
                          <th class="center"> Floor Images </th>
                          <th class="center"> Conditions </th>
                          <th class="center"> Features </th>
                          <th class="center"> Property Details</th>
                         <!-- new -->
                        <th class="center"> Action </th>
                  </tr>
                </thead>
                  <tbody>
                  <?php 
                           $i = 1;
                            foreach ($get_datas as $member) {
                             
                              $query = $this->db->get_where('property_type',array('isActive'=> '1','id'=>$member->propertyType));
                              $result = $query->row();

                                ?>
                              <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                <td class="center"> <?=$i; ?></td>
                                  <td class="center">   <?=$member->propertyName; ?></td>
                                  <td class="center">   <?= ($member->propertyStatus == '1') ? 'For Sale' : 'For Rent'; ?></td>
                                  <td class="center">   <?=$result->property_type; ?></td>
                                 <td class="center">   <?=$member->propertySqft; ?></td>
                                 <td class="center">   <?=$member->propertyPrice; ?></td>
                                  <td class="center"> <img src="<?php echo base_url(); ?>assets/uploads/properties/thumnail/<?php echo $member->thumnail ?>" alt="" class="img-fluid" style="width: 50px;"></td>
                                 <!-- new -->
                                  <td class="center"> <a href="#" class="OpenImageModal" data-bs-toggle="modal" data-bs-target="#propertyImagemodel" data-id="<?php echo $member->id; ?>">
                                   <i class="bi bi-plus-circle-fill" style="font-size: 17px;"></i>
                                    </a> </td> 
                                    <td class="center"> <a href="#" class="OpenFloorImageModal" data-bs-toggle="modal" data-bs-target="#floorImagemodel" data-id="<?php echo $member->id; ?>">
                                   <i class="bi bi-plus-circle-fill" style="font-size: 17px;"></i>
                                    </a> </td>
                                  <td class="center"><a href="#" class="Openconditionsmodal" data-bs-toggle="modal" data-bs-target="#conditionsmodal" data-id="<?php echo $member->id; ?>">
                                   <i class="bi bi-plus-circle-fill" style="font-size: 17px;"></i>
                                    </a></td>
                                  <td class="center"><a href="#" class="Openfeaturesmodal" data-bs-toggle="modal" data-bs-target="#featuresmodal" data-id="<?php echo $member->id; ?>">
                                   <i class="bi bi-plus-circle-fill" style="font-size: 17px;"></i>
                                    </a></td>
                                  <td class="center"><a href="#" class="Opendetailsmodal" data-bs-toggle="modal" data-bs-target="#detailsmodal" data-id="<?php echo $member->id; ?>">
                                   <i class="bi bi-plus-circle-fill" style="font-size: 17px;"></i>
                                    </a></td>
                                 <!-- new -->
                                 <td class="center">
                                    <a href="<?php echo base_url() ?>dashboard/EditProperties?I=<?php echo $member->id; ?>" class=""
                                        data-id="<?php echo $member->id; ?>">
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
	<div class="modal fade" id="propertyImagemodel" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Add Property Images</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	           <form action="#" id="form_images" class="form-horizontal" method="post" enctype="multipart/form-data">
        
               <div class="modal-body">
                      <div class="">
                             <label for="inputName" class="form-label">Property Image  <span class="error"> * <span  style="color:black;font-size: 11px;">You Can Upload Multiple Images(MAX 5)</span></span></label><br>
                           <input type="file" name="property_img[]" id="property_img"  class="" multiple>
                       </div>
              
             <div class="">
                <!-- table-responsive -->
                
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="width: 10%;">Sno</th>
                  <th scope="col" style="width:75%%">Image</th>
                   <th scope="col" style="width: 10%;">Action</th>
                </tr>
              </thead>
              <tbody class="allowancetbl">
       
              </tbody>
            </table>
 
              </div>
            
            </div>
          
         
          <div class="modal-footer">
            <input type="hidden" name="id">
            <input type="hidden" name="property_id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="add_image">Save</button>
          </div>
        </form>
	      </div>
	    </div>
	  </div> 
      <!-- Property Image  -->
      <!-- Add floor Image-->
  <div class="modal fade" id="floorImagemodel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> Floor Images</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
             <form action="#" id="form_images1" class="form-horizontal" method="post" enctype="multipart/form-data">
        
               <div class="modal-body">
                      <!-- <div class="">
                             <label for="inputName" class="form-label">Property Image  <span class="error"> * <span  style="color:black;font-size: 11px;">You Can Upload Multiple Images(MAX 5)</span></span></label><br>
                           <input type="file" name="property_img[]" id="property_img"  class="" multiple>
                       </div>
               -->
             <div class="">
                <!-- table-responsive -->
                
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="width: 10%;">Sno</th>
                  <th scope="col" style="width:75%%">Image</th>
                   <th scope="col" style="width: 10%;">Action</th>
                </tr>
              </thead>
              <tbody class="floortbl">
       
              </tbody>
            </table>
 
              </div>
            
            </div>
          
         
          <div class="modal-footer">
            <input type="hidden" name="id">
            <input type="hidden" name="property_id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary " id="add_image">Save</button> -->
          </div>
        </form>
        </div>
      </div>
    </div> 
      <!-- Property Image  -->
    





  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <!-- footerContent -->

  <?php $this->load->view('Backend/footerContent'); ?>
      <!-- End Footer -->

  <?php $this->load->view('footer'); ?>

  <!-- Modal -->
  <?php $this->load->view('Backend/properties/modal_properties'); ?>

  <?php $this->load->view('Backend/properties/property_scripts'); ?>

  <script type="text/javascript">


  //home banner


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
        url: '<?php echo base_url('Dashboard/DeleteProperties') ?>',
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