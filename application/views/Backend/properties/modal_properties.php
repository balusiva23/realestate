
 <!-- //-----------------------------Conditions ------------------------------- -->
	<div class="modal fade" id="conditionsmodal" tabindex="-1">
	    <div class="modal-dialog modal-dialog-centered ">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Add Conditions</h5>
	          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	           <form action="#" id="conditions_form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="modal-body">
 
                   <table class="table table-bordered" id="dynamic_field_condition" style="border: 0px solid white;">  
                              <tr>  
                                
                                  <td>
                         
                                    <input type="text" name="conditions[]"  placeholder="Enter Conditions" class="form-control"  /> 
                                </td>
                                  
                                   <td><button type="button" name="add" id="add_more_condition" class="btn btn-success">+</button></td>  
                              </tr> 
                               
                         </table>
                 
             <div class="table-responsive">
                
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Sno</th>
                  <th scope="col">Conditions</th>
        
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="conditiontbl">
       
              </tbody>
            </table>
 
              </div>
          </div>
          <div class="modal-footer">
             <input type="hidden" name="id">
            <input type="hidden" name="property_id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="conditions_save">Save</button>
          </div>
        </form>
	      </div>
	    </div>
	  </div> 
 <!-- //-----------------------------Features (features) ------------------------------- -->
  <div class="modal fade" id="featuresmodal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Features</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
             <form action="#" id="features_form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="modal-body">
 
              <table class="table table-bordered" id="dynamic_field_features" style="border: 0px solid white;">  
              <tr>  

                <td>

                  <input type="text" name="features[]"  placeholder="Enter Features" class="form-control"  /> 
              </td>
                
                 <td><button type="button" name="add" id="add_more_features" class="btn btn-success">+</button></td>  
              </tr> 

              </table>
                 
             <div class="table-responsive">
                
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Sno</th>
                  <th scope="col">Features</th>
        
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="featurestbl">
       
              </tbody>
            </table>
 
              </div>
          </div>
          <div class="modal-footer">
             <input type="hidden" name="id">
            <input type="hidden" name="property_id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="features_save">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
     <!-- //-----------------------------Details (details) ------------------------------- -->
  <div class="modal fade" id="detailsmodal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
             <form action="#" id="details_form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="modal-body">
 
              <table class="table table-bordered" id="dynamic_field_details" style="border: 0px solid white;">  
              <tr>  

                <td>

                  <input type="text" name="details[]"  placeholder="Enter Details" class="form-control"  /> 
              </td>
                
                 <td><button type="button" name="add" id="add_more_details" class="btn btn-success">+</button></td>  
              </tr> 

              </table>
                 
             <div class="table-responsive">
                
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Sno</th>
                  <th scope="col">Details</th>
        
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="detailstbl">
       
              </tbody>
            </table>
 
              </div>
          </div>
          <div class="modal-footer">
             <input type="hidden" name="id">
            <input type="hidden" name="property_id">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary " id="details_save">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div> 