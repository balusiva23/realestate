<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Recipe Management System </title>
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
      <h1>Recipe Management System</h1>
      <nav>
     <!--    <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol> -->
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        	<div class="text-right m-2" style="display: flex; justify-content: end;">
        		 <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Receipe</button>
        	</div>
      
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Recipe Management System</h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
              <table class="table  table-striped table-bordered table-hover" id="example4" width="100%">
                <thead>
                  <tr>
		                <th class="center">S.No</th>
		              
		                <th class="center"> Name </th>
		            <!--     <th class="center"> Brand </th>
		                <th class="center"> Quantity </th>
		                <th class="center"> Price </th> -->
		           
		                <th class="center"> Ingredients with details </th>
                        <th class="center"> Update / Delete </th>
		           
		            </tr>
                </thead>
                <tbody>
                  <?php 
                           $i = 1;
                            foreach ($members as $member) {?>
                             <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                <td class="center"> <?=$i; ?></td>
                               
                                <td class="center">   <?=$member->name; ?></td>
                          <!--       <td class="center">   <?=$member->brand; ?></td>
                                <td class="center">   <?=$member->quantity; ?></td>
                                <td class="center">   <?=$member->price; ?></td> -->
                       
                               <td>
                                   <a href="<?php echo base_url(); ?>Dashboard/Ingredients?I=<?php echo $member->id; ?>" class="tblBtn "
                                        data-id="<?php echo $member->id; ?>">
                                        <i class="bx bxs-plus-square" style="font-size: 25px;"></i>
                                    </a>
                               </td>
                                <td class="center">
                                    <a href="#" class="tblEditBtn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#Editverticalycentered" data-id="<?php echo $member->id; ?>">
                                        <i class="fa fa-pencil" ></i>
                                    </a> 
                                    <a class="tblDelBtn"  data-id="<?php echo $member->id; ?>"><!-- data-bs-toggle="modal"
                                        data-bs-target="#smallModel" -->
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
    </section>
  <!-- Add -->
	<div class="modal fade" id="verticalycentered" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Add Recipe</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	         <form action="#" id="member_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	             
                <div class="row ">
                <div class="col-md-12">
				    <label for="inputName" class="form-label">Recipe Name<span class="required"> * </span></label>
				    <input type="text" name="name" data-required="1" placeholder="Recipe Name" class="form-control" id="name" required />
				</div>

			
			  </div>
          
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	          <button type="button" class="btn btn-primary " id="save_member">Save</button>
	        </div>
	      </form>
	      </div>
	    </div>
	  </div> 
	   <!-- Edit -->
	<div class="modal fade" id="Editverticalycentered" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
            <!-- modal-lg -->
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Update Recipe</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	         <form action="#" id="Editmember_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	             
                <div class="row ">
                <div class="col-md-12">
				    <label for="inputName" class="form-label">Recipe Name</label>
				    <input type="text" name="name" data-required="1" placeholder="Recipe Name" class="form-control" id="inputName" required />
				</div>

			
			  </div>
             
	        <div class="modal-footer">
	        	 <input type="hidden" name="id">
	          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	          <button type="button" class="btn btn-primary " id="update_member">Update</button>
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


 $(document).on('click','#save_member',function(){
        event.preventDefault();
    

      

           if( $("#name").val() != '' ){ //&&  $("#brand").val() != '' &&  $("#quantity").val() != '' &&  $("#price").val() != ''

            $.ajax({
            type:'post',
            url: '<?php echo base_url("Dashboard/add_product");?>',
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


 $(document).ready(function() {
        $('#example4').on('click', '.tblEditBtn', function() {
            // Get the data attributes from the button
            var id = $(this).data('id');

            // Make an AJAX request to retrieve the data for the ID
            $.ajax({
                url: '<?php echo base_url("Dashboard/getProductByID"); ?>?id=' + id, // Adjust the URL to match your product retrieval endpoint
                method: 'GET',
                //data: { id: id },
                dataType: 'json',
                success: function(response) {
                    // Populate the modal with the data returned from the server
                    $('#Editverticalycentered [name="id"]').val(response.id);
                    $('#Editverticalycentered [name="name"]').val(response.name);
                    $('#Editverticalycentered [name="brand"]').val(response.brand);
                    $('#Editverticalycentered [name="quantity"]').val(response.quantity);
                    $('#Editverticalycentered [name="price"]').val(response.price);

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
        url: '<?php echo base_url("Dashboard/edit_product");?>',
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
    url: '<?php echo base_url('Dashboard/deleteProduct') ?>',
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





</script>

</body>

</html>