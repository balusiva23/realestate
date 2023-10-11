
     <script>
      //-----------------------------Propwerty images -------------------------------
      //allowance  
       $(document).ready(function(){  


            $('#add_image').click(function () {
    var maxAllowedFiles = 5; // Set the maximum allowed files
    var selectedFiles = $('#property_img').get(0).files;

    if (selectedFiles.length > 0) {
        if (selectedFiles.length <= maxAllowedFiles) {
            // Create a FormData object to send the form data
            var formData = new FormData($('#form_images')[0]);
            
            $.ajax({
                url: "<?php echo base_url('dashboard/add_property_images');?>",
                method: "POST",
                data: formData,
                contentType: false, // Set to false for FormData
                processData: false, // Set to false for FormData
                success: function (res) {
                    var data = $.parseJSON(res);
                    if (data.status == 'success') {
                        $('#form_images')[0].reset();
                        $('#propertyImagemodel').modal('hide');
                        $(".modal-backdrop").remove();
                        $.wnoty({
                            type: 'success',
                            message: data.message,
                            autohideDelay: 1000,
                            position: 'top-right'
                        });
                        $('.addfields').remove();
                        loadimage();
                    } else if (data.status == 'error') {
                        $('#form_images')[0].reset();
                        $('#propertyImagemodel').modal('hide');
                        $(".modal-backdrop").remove();
                        $.wnoty({
                            type: 'error',
                            message: data.message,
                            autohideDelay: 1000,
                            position: 'top-right'
                        });
                        $('.addfields').remove();
                        loadimage();
                    }
                }
            });
        } else {
            alert("You can only upload a maximum of " + maxAllowedFiles + " images.");
        }
    } else {
        // Handle the case when no files are selected
        alert("Please select a file to upload.");
    }
});
});
       //get allowance
       function loadimage(){
        $(document).ready(function () {
        $(document).on("click", '.OpenImageModal',function (event) {
        event.preventDefault();
        var id = $(this).attr("data-id");  

        if(id != '' ){
        $.ajax({
          url: "Get_properties_images?id="+id,
          type:"GET",
          dataType:'',
          data:'data',          
          success: function(response) {
            // console.log(response);
            $('.allowancetbl').html(response);
          },
          error: function(response) {
            
          }
        });
      }
      });
      });

      }
      loadimage();
      //delete allowance
      $(document).ready(function () {
        $(document).on("click", '.deleteImage',function (event) {
        event.preventDefault();
        var id = $(this).attr("data-id");  
         var row = $(this).closest("tr");
        if(id != ''  ){
        $.ajax({
          url: '<?php echo base_url("dashboard/deleteImage")?>',
          type:"POST",
          data: {id:id},          
          success: function(response) {
          
           row.remove();
           /* $('#AdditionModal').modal('hide');
            $(".modal-backdrop").remove();*/
             $.wnoty({
              type: 'success',
              message: "Deleted Successfully",
              autohideDelay: 1000,
              position: 'top-right'

              });
          },
          error: function(response) {
            
          }
        });
      }
      });
      });



  
          $(document).ready(function () {

            $(document).on('click', ".OpenImageModal", function (e) {
              e.preventDefault(e);
              var id = $(this).attr('data-id');
             
             $('#form_images').find('[name="property_id"]').val(id).end();
           

               });
             });



         //-----------------------------Conditions -------------------------------
              $(document).ready(function(){  
            var i=1;  
            $('#add_more_condition').click(function(){  
                 i++;  
                 $('#dynamic_field_condition').append('<tr id="row'+i+'" class="addfields"><td> <input type="text" name="conditions[]"  placeholder="Enter Conditions" class="form-control"  /> </td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
            });  
            });  
            $(document).on('click', '.btn_remove', function(){  
                 var button_id = $(this).attr("id");   
                
                 $('#row'+button_id+'').remove();  
      
            }); 

       $(document).ready(function(){  

               $('#conditions_save').click(function(){  
              console.log($('[name="conditions[]"]').val());
              if($('[name="conditions[]"]').val() != ''){          
                 $.ajax({  
                      url:"<?php echo base_url("dashboard/Add_conditions");?>",  
                      method:"POST",  
                      data: new FormData($('#conditions_form')[0]),//$('#conditions_form').serialize(),  
                      processData: false, // Ensure data is not processed
                      contentType: false, // Ensure content type is not set
                      success:function(res)  
                      {  
                          var data = $.parseJSON(res); 
                        if (data.status == 'success') {
                            $('#conditions_form')[0].reset();
                              $('#conditionsmodal').modal('hide');
                            $(".modal-backdrop").remove();
                            
                                $('#conditions_form')[0].reset();
                                $.wnoty({
                                    type: 'success',
                                    message: data.message,
                                    autohideDelay: 1000,
                                    position: 'top-right'
                                });
                      
                                $('.addfields').remove();
                                 loadconditions();
                        } else if (data.status == 'error') {
                                $('#conditions_form')[0].reset();
                                          $('.totalallow').text('');
                               $('#conditionsmodal').modal('hide');
                            $(".modal-backdrop").remove();

                            $.wnoty({
                                type: 'error',
                                message: data.message,
                                autohideDelay: 1000,
                                position: 'top-right'

                            });
                              $('.addfields').remove();
                                 loadconditions();
                        }
                      }  
                 });
                 } 
            });  
       });  
 
           //get allowance
           function loadconditions(){
            $(document).ready(function () {
            $(document).on("click", '.Openconditionsmodal',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  

            if(id != '' ){
            $.ajax({
              url: "Get_properties_Conditions?id="+id,
              type:"GET",
              dataType:'',
              data:'data',          
              success: function(response) {
                // console.log(response);
                $('.conditiontbl').html(response);
              },
              error: function(response) {
                
              }
            });
          }
          });
          });

          }
          loadconditions();
          //delete allowance
          $(document).ready(function () {
            $(document).on("click", '.deletecondition',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  
             var row = $(this).closest("tr");
            if(id != ''  ){
            $.ajax({
              url: '<?php echo base_url("dashboard/deletecondition")?>',
              type:"POST",
              data: {id:id},          
              success: function(response) {
              
               row.remove();
               /* $('#AdditionModal').modal('hide');
                $(".modal-backdrop").remove();*/
                 $.wnoty({
                  type: 'success',
                  message: "Deleted Successfully",
                  autohideDelay: 1000,
                  position: 'top-right'

                  });
              },
              error: function(response) {
                
              }
            });
          }
          });
          });



  
          $(document).ready(function () {

            $(document).on('click', ".Openconditionsmodal", function (e) {
              e.preventDefault(e);
              var id = $(this).attr('data-id');
             
             $('#conditions_form').find('[name="property_id"]').val(id).end();
           

               });
             });  


             //------------------------------Features (features) -------------------------------
              $(document).ready(function(){  
            var i=1;  
            $('#add_more_features').click(function(){  
                 i++;  
                 $('#dynamic_field_features').append('<tr id="row'+i+'" class="addfields"><td> <input type="text" name="features[]"  placeholder="Enter Features" class="form-control"  /> </td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
            });  
            });  
            $(document).on('click', '.btn_remove', function(){  
                 var button_id = $(this).attr("id");   
                
                 $('#row'+button_id+'').remove();  
      
            }); 

       $(document).ready(function(){  

               $('#features_save').click(function(){  
             
              if($('[name="features[]"]').val() != ''){          
                 $.ajax({  
                      url:"<?php echo base_url("dashboard/Add_features");?>",  
                      method:"POST",  
                      data: new FormData($('#features_form')[0]),//$('#features_form').serialize(),  
                      processData: false, // Ensure data is not processed
                      contentType: false, // Ensure content type is not set
                      success:function(res)  
                      {  
                          var data = $.parseJSON(res); 
                        if (data.status == 'success') {
                            $('#features_form')[0].reset();
                              $('#featuresmodal').modal('hide');
                            $(".modal-backdrop").remove();
                            
                                $('#features_form')[0].reset();
                                $.wnoty({
                                    type: 'success',
                                    message: data.message,
                                    autohideDelay: 1000,
                                    position: 'top-right'
                                });
                      
                                $('.addfields').remove();
                                 loadfeatures();
                        } else if (data.status == 'error') {
                                $('#features_form')[0].reset();
                                          $('.totalallow').text('');
                               $('#featuresmodal').modal('hide');
                            $(".modal-backdrop").remove();

                            $.wnoty({
                                type: 'error',
                                message: data.message,
                                autohideDelay: 1000,
                                position: 'top-right'

                            });
                              $('.addfields').remove();
                                 loadfeatures();
                        }
                      }  
                 });
                 } 
            });  
       });  
 
           //get allowance
           function loadfeatures(){
            $(document).ready(function () {
            $(document).on("click", '.Openfeaturesmodal',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  

            if(id != '' ){
            $.ajax({
              url: "Get_properties_features?id="+id,
              type:"GET",
              dataType:'',
              data:'data',          
              success: function(response) {
                // console.log(response);
                $('.featurestbl').html(response);
              },
              error: function(response) {
                
              }
            });
          }
          });
          });

          }
          loadfeatures();
          //delete allowance
          $(document).ready(function () {
            $(document).on("click", '.deletefeatures',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  
             var row = $(this).closest("tr");
            if(id != ''  ){
            $.ajax({
              url: '<?php echo base_url("dashboard/deletefeatures")?>',
              type:"POST",
              data: {id:id},          
              success: function(response) {
              
               row.remove();
               /* $('#AdditionModal').modal('hide');
                $(".modal-backdrop").remove();*/
                 $.wnoty({
                  type: 'success',
                  message: "Deleted Successfully",
                  autohideDelay: 1000,
                  position: 'top-right'

                  });
              },
              error: function(response) {
                
              }
            });
          }
          });
          });



  
          $(document).ready(function () {

            $(document).on('click', ".Openfeaturesmodal", function (e) {
              e.preventDefault(e);
              var id = $(this).attr('data-id');
             
             $('#features_form').find('[name="property_id"]').val(id).end();
           

               });
             });

             //------------------------------Details (details) -------------------------------
              $(document).ready(function(){  
            var i=1;  
            $('#add_more_details').click(function(){  
                 i++;  
                 $('#dynamic_field_details').append('<tr id="row'+i+'" class="addfields"><td> <input type="text" name="details[]"  placeholder="Enter Details" class="form-control"  /> </td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
            });  
            });  
            $(document).on('click', '.btn_remove', function(){  
                 var button_id = $(this).attr("id");   
                
                 $('#row'+button_id+'').remove();  
      
            }); 

       $(document).ready(function(){  

               $('#details_save').click(function(){  
             
              if($('[name="details[]"]').val() != ''){          
                 $.ajax({  
                      url:"<?php echo base_url("dashboard/Add_details");?>",  
                      method:"POST",  
                      data: new FormData($('#details_form')[0]),//$('#details_form').serialize(),  
                      processData: false, // Ensure data is not processed
                      contentType: false, // Ensure content type is not set
                      success:function(res)  
                      {  
                          var data = $.parseJSON(res); 
                        if (data.status == 'success') {
                            $('#details_form')[0].reset();
                              $('#detailsmodal').modal('hide');
                            $(".modal-backdrop").remove();
                            
                                $('#details_form')[0].reset();
                                $.wnoty({
                                    type: 'success',
                                    message: data.message,
                                    autohideDelay: 1000,
                                    position: 'top-right'
                                });
                      
                                $('.addfields').remove();
                                 loaddetails();
                        } else if (data.status == 'error') {
                                $('#details_form')[0].reset();
                                          $('.totalallow').text('');
                               $('#detailsmodal').modal('hide');
                            $(".modal-backdrop").remove();

                            $.wnoty({
                                type: 'error',
                                message: data.message,
                                autohideDelay: 1000,
                                position: 'top-right'

                            });
                              $('.addfields').remove();
                                 loaddetails();
                        }
                      }  
                 });
                 } 
            });  
       });  
 
           //get allowance
           function loaddetails(){
            $(document).ready(function () {
            $(document).on("click", '.Opendetailsmodal',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  

            if(id != '' ){
            $.ajax({
              url: "Get_properties_details?id="+id,
              type:"GET",
              dataType:'',
              data:'data',          
              success: function(response) {
                // console.log(response);
                $('.detailstbl').html(response);
              },
              error: function(response) {
                
              }
            });
          }
          });
          });

          }
          loaddetails();
          //delete allowance
          $(document).ready(function () {
            $(document).on("click", '.deletedetails',function (event) {
            event.preventDefault();
            var id = $(this).attr("data-id");  
             var row = $(this).closest("tr");
            if(id != ''  ){
            $.ajax({
              url: '<?php echo base_url("dashboard/deletedetails")?>',
              type:"POST",
              data: {id:id},          
              success: function(response) {
              
               row.remove();
               /* $('#AdditionModal').modal('hide');
                $(".modal-backdrop").remove();*/
                 $.wnoty({
                  type: 'success',
                  message: "Deleted Successfully",
                  autohideDelay: 1000,
                  position: 'top-right'

                  });
              },
              error: function(response) {
                
              }
            });
          }
          });
          });



  
          $(document).ready(function () {

            $(document).on('click', ".Opendetailsmodal", function (e) {
              e.preventDefault(e);
              var id = $(this).attr('data-id');
             
             $('#details_form').find('[name="property_id"]').val(id).end();
           

               });
             });

     </script>