<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Property </title>
  <?php $this->load->view('header'); ?>
  <style>
  /* Reduce font size */
  p, li, code {
    font-size: 11px; /* Adjust the font size as needed */
    color: #565a5e;
  }

  /* Remove spaces between elements */
  p, ol, pre, code {
    margin: 0;
    padding: 0;
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Property</h1>
      <nav>
       <!--  <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Property</li>
        </ol> -->
      </nav>
    </div><!-- End Page Title -->


    <section class="section mb-5">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Property</h5>

              <!-- General Form Elements -->
              <form action="#" id="member_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">Property Title</label><span class="error"> * </span>
                    <input type="text" class="form-control" name="propertyName" id="propertyName" required>
                  </div>
               
           
                  <div class="col-sm-4">
                  	 <label for="inputEmail" class="col-form-label">Status</label><span class="error"> * </span>
                     <select class="form-select" aria-label="Default select example" name="propertyStatus" id="propertyStatus" required>
                      <!-- <option selected>Open this select menu</option> -->
                      <option value="1">For Sale</option>
                      <option value="2">For Rent</option>
                  
                    </select>
                  </div>
                  <div class="col-sm-4">
                  	 <label for="inputEmail" class="col-form-label">Type</label><span class="error"> * </span>
                  <select class="form-select" name="propertyType" id="propertyType" required>
                        <option value="Apartment">Apartment</option>
                        <option value="House">House</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Garage">Garage</option>
                        <option value="Lot">Lot</option>
                    </select>
                  </div>
            
                </div>     
                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">Area/Location(SqFt)</label><span class="error"> * </span>
                    <input type="text" class="form-control" name="propertySqft" id="propertySqft" required>
                  </div>
               
           
                  <div class="col-sm-4">
                  	 <label for="inputEmail" class="col-form-label">Rooms</label>
                     <select class="form-select" aria-label="Default select example" name="rooms">
                       <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                  
                    </select>
                  </div>
                  <div class="col-sm-4">
                  	 <label for="inputEmail" class="col-form-label"> Bathroom</label>
                  <select class="form-select"  name="bathroom">
                       <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                  
                    </select>
                  </div>
            
                </div>
                 <div class="row mb-3">
                 
                   <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">Sale or Rent Price</label>
                    <input type="number" class="form-control" name="propertyPrice" id="propertyPrice">
                  </div>

                  <div class="col-sm-4">
                  	 
	                <label for="inputName" class="col-form-label">Thumnail<span class="error"> * </span></label><br>
	                <input type="file"  class="form-control" name="thumnail" id="thumnail">
                  </div>
            
                </div>
                 <h5 class="card-title">Location</h5>
                 <div class="row mb-3">
                  
                   <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                  </div> 
                  <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                  </div> 
                  <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">State</label>
                    <input type="text" class="form-control" name="state" id="state">
                  </div> 
                  <div class="col-sm-4">
                  	 <label for="inputText" class="col-form-label">Postal Code</label>
                    <input type="number" class="form-control" name="pincode" id="pincode">
                  </div>
              
               </div>    
               <h5 class="card-title">Description</h5>
                 <div class="row mb-3">
                  
                   <div class="col-sm-8">
                  	 <label for="inputText" class="col-form-label">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description"></textarea>
                  </div> 
                 
               </div>  
               <h5 class="card-title">Floor Plans</h5>
                 <div class="row mb-3">
                  
                   <div class="col-sm-4">
                  	<label for="inputName" class="col-form-label">Image<span class="error">  </span></label><br>
	                <input type="file"  class="form-control" name="floorimg" id="floorimg">
                  </div> 
                 
               </div> 
               <h5 class="card-title">Location</h5>
                 <div class="row mb-3">
                  
                   <div class="col-sm-4">
                   <label for="inputText" class="col-form-label">Property Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="https://www.google.com/maps/embed?..">

                   <p>Here's how to get the embed URL from Google Maps:</p>
                   <p>
					
					 <p>1.Open Google Maps and find your location.</p>
					 <p>2.Click "Share" on the left.</p>
					 <p>3.Choose "Embed a map" to get HTML code.</p>
					 <p>4.Locate the code snippet with the map, like this:</p>
					<p> <pre><code>&lt;iframe src="https://www.google.com/maps/embed?..."&gt;&lt;/iframe&gt;</code></pre></p>
					<p>5.Copy the URL inside the quotes, for example:</p>
					<p><pre><code>https://www.google.com/maps/embed?...</code></pre></p>
					<p>6.Paste this URL</p>
                     </p>

                  </div> 
                 
               </div> 
               <h5 class="card-title">Property Video</h5>
                 <div class="row mb-3">
                  
                   <div class="col-sm-4">
                   <label for="inputText" class="col-form-label">Property Video</label>
                    <input type="text" class="form-control" name="video" id="video" placeholder="https://www.youtube.com/embed/VIDEO_I">

                   <p>Here's how to get the embed URL from Youtube:</p>
                   <p>
					<p>1.Find Your Video: Go to YouTube and find the video you want to embed.</p>
					<p>2.Click "Share": Below the video, click the "Share" button.</p>
					<p>3.Choose "Embed": In the sharing options, select "Embed."</p>
					<p>4. Locate the code snippet with the YouTube video, which looks like this:</p>
                    <p>
					   <code>
					   &lt;iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
					   </code>
					</p>
                   <p>5. Copy the URL inside the <code>src</code> attribute, for example:</p>
                    <p>
					   <code>
					   https://www.youtube.com/embed/VIDEO_ID
					   </code>
					</p>
                     </p>
                   </div> 
                 
               </div>
              

                <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label"></label> -->
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" id="save_member">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

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
  	
 $(document).on('click','#save_member',function(){
        event.preventDefault();
    
              $("#member_form_add").valid();
      

           if( $("#propertyName").val() != '' && $("#propertyStatus").val() != '' && $("#propertyType").val() != '' && $("#thumnail").val() != '' ){ 

            $.ajax({
            type:'post',
            url: '<?php echo base_url("Dashboard/add_properties");?>',
            data: new FormData($("#member_form_add")[0]),
            contentType: false,
            processData: false, 
            success:function(resp){
            var data=$.parseJSON(resp);
            if(data.status == 'success'){
            $('#member_form_add')[0].reset();
       

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
  </script>

</body>

</html>