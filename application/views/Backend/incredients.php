<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Ingridients</h1>
      <nav>
       <!--  <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
      </nav>
    </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ingridients</h5>

              <!-- General Form Elements -->
              <form id="myForm" method="post">
              <div class="row">
                  <div class="col-sm-12 items">
                      <div class=" mb-3 row ">
                        
                          <div class="col-sm-3">
                              <label for="inputText" class="col-form-label">Name</label>
                              <input type="text" name="name[]" id="name" class="form-control">
                          </div>
                          
                          <div class="col-sm-3">
                            <label for="inputNumber" class=" col-form-label">Quantity</label>
                              <input type="number" name="quantity[]" id="quantity" class="form-control">
                          </div>
                          <div class="col-sm-3">
                             <label for="inputPassword" class=" col-form-label">Method</label>
                              <textarea class="form-control" name="method[]" style="height: " data-gramm="false" wt-ignore-input="true" rows="1"></textarea>
                          </div>
                            <div class=" col-sm-3 mt-4 mb-3">
                               <label for="inputPassword" class=" col-form-label"></label>
                           <button type="button" class="btn btn-primary " id="addMore">+</button>

                      </div>
                      </div>
                      <div class="addrow"></div>

                    
                  </div>
              </div>

              <div class="row mb-3">
                  <div class="col-sm-10">
                     <input type="hidden" name="rid" value="<?php echo $rid; ?>">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a  href="<?php echo base_url(); ?>dashboard/Products"  class="btn btn-secondary">Back</a>
                  </div>
              </div>
          </form>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Ingridients</h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
              <table class="table  table-striped table-bordered table-hover " id="example4">
                <thead>
                  <tr>
                    <th class="center">S.No</th>
                  
                    <th class="center"> Name </th>
                     <th class="center"> Quantity  </th>
                     <th class="center method" style="width: 20% !important;"> Method  </th>
                      <th class="center">  Delete </th>
               
                </tr>
                </thead>
                <tbody>
                  <?php 
                           $i = 1;
                           if($members){
                            foreach ($members as $member) {?>
                             <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                <td class="center"> <?=$i; ?></td>
                               
                                <td class="center">   <?=$member->name; ?></td>
                         
                                <td class="center">   <?=$member->quantity; ?></td>
                                <td class="center" style="width: 20% !important;">   <?=$member->method?></td>
                       
                           
                                <td class="center">
                                   <!--  <a href="#" class="tblEditBtn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#Editverticalycentered" data-id="<?php echo $member->id; ?>">
                                        <i class="fa fa-pencil" ></i>
                                    </a>  -->
                                    <a class="tblDelBtn"  data-id="<?php echo $member->id; ?>"><!-- data-bs-toggle="modal"
                                        data-bs-target="#smallModel" -->
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            
                            </tr>


                            <?php $i++; } } ?>
                        
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>

     
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- footerContent -->

  <?php $this->load->view('Backend/footerContent'); ?>
      <!-- End Footer -->

  <?php $this->load->view('footer'); ?>

  <script>
      $(document).ready(function () {
            $("#addMore").click(function () {
                var newRow = `
                    <div class="mb-3 row">
                        <div class="col-sm-3">
                            
                            <input type="text" name="name[]" class="form-control">
                        </div>
                        <div class="col-sm-3">
                           
                            <input type="number" name="quantity[]" class="form-control">
                        </div>
                        <div class="col-sm-3">
                           
                            <textarea class="form-control" name="method[]" style="height: " data-gramm="false" wt-ignore-input="true" rows="1"></textarea>
                        </div>
                      
                        <div class="col-sm-3 mb-3">
                       
                            <button type="button" class="btn btn-danger removeField">X</button>
                        </div>
                    </div>
                `;
                $(".addrow").append(newRow);
            });
       //new

         // Handle form submission via AJAX
          $("#myForm").submit(function (e) {
              e.preventDefault();
              
              var ingredients = [];
              $(".mb-3.row").each(function () {
                  var name = $(this).find('input[name="name[]"]').val();
                  var quantity = $(this).find('input[name="quantity[]"]').val();
                  var method = $(this).find('textarea[name="method[]"]').val();

                  ingredients.push({ name: name, quantity: quantity, method: method });
              });

              var recipe_id = $("input[name='rid']").val();
               if( $("#name").val() != '' && $("#quantity").val() != '' ){
                //alert()
              $.ajax({
                  url: '<?= base_url('Dashboard/addIngredients') ?>',
                  type: 'POST',
                  data: { ingredients: ingredients, recipe_id: recipe_id },
                  dataType: 'json',
                  success: function (response) {
                      // Handle the success response here, e.g., show a success message
                      //alert(response.message);

                      $.wnoty({
                      type: 'success',
                      message: response.message,
                      autohideDelay: 1000,
                      position: 'top-right'

                      });
                       setTimeout(function(){
                      location.reload(true);
                      },2000);
                  },
                  error: function (xhr, status, error) {
                      // Handle errors here, e.g., show an error message
                      console.error(xhr.responseText);
                  }
              });
            }
          });


      // Remove fields
            $(".addrow").on("click", ".removeField", function () {
                $(this).closest(".mb-3.row").remove();
            });
        });



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
        url: '<?php echo base_url('Dashboard/deleteItems') ?>',
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