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
      <h1>Dashboard</h1>
      <nav>
       <!--  <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

       <div class="col-xl-12">

          <div class="card" style=" margin-bottom: 100px;">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Logo</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Favicon</button>
                </li>
<!-- 
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Topbar</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Banner</button>
                </li>
                   <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#footer-settings">Footer</button>
                </li>

              </ul>
              <div class="tab-content p-4">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                 <form action="<?php echo base_url("Dashboard/submitForm");?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="<?php echo base_url(); ?>assets/uploads/logo/<?php echo $tbl_data->logo ?>" class="existing-photo" style="width: 150px;height: auto;max-height:unset;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="photo_logo">
                          </div>
                      </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                         <input type="hidden" name="form_identifier" value="form_logo">
                      <button type="submit" class="btn btn-primary pull-left form-submit-button" name="form_logo">Update Logo</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <form action="<?php echo base_url("Dashboard/submitForm");?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">Existing Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <img src="<?php echo base_url(); ?>assets/uploads/favicon/<?php echo $tbl_data->favicon ?>" class="existing-photo" style="height:40px;">
                          </div>
                      </div>
                  <div class="form-group">
                          <label for="" class="col-sm-2 control-label">New Photo</label>
                          <div class="col-sm-6" style="padding-top:6px;">
                              <input type="file" name="photo_favicon">
                          </div>
                      </div>
                      <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <input type="hidden" name="form_identifier" value="form_favicon">
                      <button type="submit" class="btn btn-primary pull-left form-submit-button" name="form_favicon">Update Favicon</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                   <form action="<?php echo base_url("Dashboard/submitForm");?>" method="post">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Top Bar Email</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="top_bar_email" type="email" class="form-control" placeholder="Email" value="<?= ($tbl_data->top_bar_email) ? $tbl_data->top_bar_email : '' ?>">
                      </div>
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Top Bar Phone Number</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="top_bar_phone" type="tel" class="form-control" placeholder="Phone Number" value="<?= ($tbl_data->top_bar_phone) ? $tbl_data->top_bar_phone : '' ?>">
                      </div>
                    </div>   
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Top Bar Location</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="top_bar_location" type="text" class="form-control" placeholder="Location" value="<?= ($tbl_data->top_bar_location) ? $tbl_data->top_bar_location : '' ?>">
                      </div>
                    
                    </div>


                    <div class="text">
                       <input type="hidden" name="form_identifier" value="form_topbar">
                      <button type="submit" class="btn btn-primary form-submit-button">Update</button>
                    </div>
                  </form><!-- End Change Password Form -->
             

                </div>   
                <!-- Footer -->
                 <div class="tab-pane fade pt-3" id="footer-settings">

                   <form action="<?php echo base_url("Dashboard/submitForm");?>" method="post">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Footer Email</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="footer_email" type="email" class="form-control" placeholder="Email" value="<?= ($tbl_data->footer_email) ? $tbl_data->footer_email : '' ?>">
                      </div>
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Footer Phone Number</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="footer_phone" type="tel" class="form-control" placeholder="Phone Number" value="<?= ($tbl_data->footer_phone) ? $tbl_data->footer_phone : '' ?>">
                      </div>
                    </div>   
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Footer Location</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="footer_location" type="text" class="form-control" placeholder="Location" value="<?= ($tbl_data->footer_location) ? $tbl_data->footer_location : '' ?>">
                      </div>
                      <label for="currentPassword" class="col-md-2 col-lg-2 col-form-label">Footer About Us</label>
                      <div class="col-md-4 col-lg-4">
                   <textarea type="text" name="footer_content" data-required="1" placeholder="" class="form-control" id="footer_content"  required><?= ($tbl_data->footer_content) ? $tbl_data->footer_content : '' ?></textarea>
                      </div>
                    
                    
                    </div>  
             


                    <div class="text">
                       <input type="hidden" name="form_identifier" value="form_footer">
                      <button type="submit" class="btn btn-primary form-submit-button">Update</button>
                    </div>
                  </form><!-- End Change Password Form -->
             

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Banner-->

            <!--       <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered">                                
                                    <tbody><tr>
                                        <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <td style="width:50%">
                                            <h4>About Page</h4>
                                            <p>
                                                <img src="http://localhost/multicms/cms/public/uploads/banner_about.jpg" alt="" style="width: 100%;height:auto;">
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_about">
                                        </td>
                                        </form>
                                          </tr>
                                    
                                    <tr>
                                        <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <td style="width:50%">
                                            <h4>Properties Page</h4>
                                            <p>
                                                <img src="http://localhost/multicms/cms/public/uploads/banner_testimonial.jpg" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_testimonial">
                                        </td>
                                        </form>
                                         </tr>
                           
                              
                                    
                                    
                                </tbody></table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">    
                                    <tbody>
                                           <tr>
                                        <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <td style="width:50%">
                                            <h4>Service Page</h4>
                                            <p>
                                                <img src="http://localhost/multicms/cms/public/uploads/banner_service.jpg" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_service">
                                        </td>
                                        </form>
                                       </tr>
                                    <tr>
                                        <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <td style="width:50%">
                                            <h4>Contact Us Page</h4>
                                            <p>
                                                <img src="http://localhost/multicms/cms/public/uploads/banner_faq.jpg" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_faq">
                                        </td>
                                        </form>
                                       </tr>

                                 
                                    

                                    
                                </tbody>
                              </table>
                            </div>
                            </div> -->
                            <!--  -->
                          <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">About Page</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $tbl_data->banner_about ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <h4 class="card-title">Change Banner</h4>
                                                Select Photo<input type="file" name="banner_about">
                                                 <input type="hidden" name="form_identifier" value="form_banner_about">
                                                <input type="submit" class="btn btn-primary btn-xs form-submit-button" value="Change" style="margin-top:10px;" name="form_banner_about">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Properties Page</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $tbl_data->banner_properties ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <h4 class="card-title">Change Banner</h4>
                                                Select Photo<input type="file" name="banner_properties">
                                                <input type="hidden" name="form_identifier" value="form_banner_properties">
                                                <input type="submit" class="btn btn-primary btn-xs form-submit-button" value="Change" style="margin-top:10px;" name="form_banner_testimonial">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Service Page</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $tbl_data->banner_service ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <h4 class="card-title">Change Banner</h4>
                                                Select Photo<input type="file" name="banner_service">
                                                   <input type="hidden" name="form_identifier" value="form_banner_service">
                                                <input type="submit" class="btn btn-primary btn-xs form-submit-button" value="Change" style="margin-top:10px;" name="form_banner_service">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Contact Us Page</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $tbl_data->banner_contact ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <form action="<?php echo base_url("Dashboard/submitForm");?>" class="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <h4 class="card-title">Change Banner</h4>
                                                Select Photo<input type="file" name="banner_contact">
                                                   <input type="hidden" name="form_identifier" value="form_banner_contact">
                                                <input type="submit" class="btn btn-primary btn-xs form-submit-button" value="Change" style="margin-top:10px;" name="form_banner_faq">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--  -->

                            <!-- Home page banner -->

                            <section class="section">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="text-right m-2" style="display: flex; justify-content: end;">
                                     <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Banner</button>
                                  </div>
                              
                                 
                                      <h5 class="card-title">Home Banner</h5>
                                   
                                      <!-- Table with stripped rows -->
                                      <!--  <div  style="">
                                      <table class="table  table-striped table-bordered table-hover display" id="bannertbl" width="100%">
                                        <thead>
                                          <tr>
                                            <th class="center">S.No</th>
                                            <th class="center"> Image </th>
                                             <th class="center"> Title </th>
                                             <th class="center"> Sub Title </th>
                                             <th class="center"> Position </th>
                                             <th class="center">Action</th>
                                       
                                        </tr>
                                        </thead>
                                    <tbody>
                                          <?php 
                                                   $i = 1;
                                                    foreach ($home_banners as $member) {?>
                                                     <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                                        <td class="center"> <?=$i; ?></td>

                                                        <td class="center"> <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $member->banner_img ?>" alt="" class="img-fluid" style="width: 150px;"></td>
                                                         
                                                        <td class="center">   <?=$member->title; ?></td>
                                                        <td class="center">   <?=$member->sub_title; ?></td>
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
                                     

                                </div> -->
                                  <div class=" table-responsive">
                              <table class="table  table-striped table-bordered table-hover datatable" id="testimonial-table">
                                <thead>
                                  <tr>
                                             <th class="center">S.No</th>
                                            <th class="center"> Image </th>
                                             <th class="center"> Title </th>
                                             <th class="center"> Sub Title </th>
                                             <th class="center"> Position </th>
                                             <th class="center">Action</th>
                                       
                                </thead>
                                 <tbody>
                                   <?php 
                                                   $i = 1;
                                                    foreach ($home_banners as $member) {?>
                                                     <tr class="odd gradeX" data-id="<?=$member->id;?>">
                                                        <td class="center"> <?=$i; ?></td>

                                                        <td class="center"> <img src="<?php echo base_url(); ?>assets/uploads/banner/<?php echo $member->banner_img ?>" alt="" class="img-fluid" style="width: 150px;"></td>
                                                         
                                                        <td class="center">   <?=$member->title; ?></td>
                                                        <td class="center">   <?=$member->sub_title; ?></td>
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
                            </section>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>

 

      </div>
    </section>

  </main>
  <!-- End #main -->
 <!-- Add banner0 -->
   <!-- Add -->
  <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add banner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
           <form action="#" id="member_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="modal-body">
           <div class="row ">
            <div class="col-md-12">
             <div class="form-group mt-2">
            <label for="inputName" class="form-label">Banner Title<span class="error">* </span></label>
            <input type="text" name="title" data-required="1" placeholder="Banner Title" class="form-control" id="title" required /> 
            </div>
             <div class="form-group mt-2">
            <label for="inputName" class="form-label">Banner Sub Title<span class="error"> </span></label>
            <input type="text" name="sub_title" data-required="1" placeholder="Banner Sub Title" class="form-control" id="sub_title"  />
            </div>
            <div class="form-group mt-2">
               <label for="inputName" class="form-label">Banner Image<span class="error">* </span></label><br>
            <input type="file" name="banner_img" id="banner_img">
            </div>   

             <div class="form-group mt-2">
               <label for="inputName" class="form-label">Banner Position<span class="error">* </span></label><br>
            <input type="number" name="position" data-required="1" placeholder="Banner Position" class="form-control" id="position"  />
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
     <div class="modal fade" id="Editverticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add banner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
           <form action="#" id="Editmember_form_add" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="modal-body">
           <div class="row ">
            <div class="col-md-12">
             <div class="form-group mt-2">
            <label for="inputName" class="form-label">Banner Title<span class="error">* </span></label>
            <input type="text" name="title" data-required="1" placeholder="Banner Title" class="form-control" id="title" required /> 
            </div>
             <div class="form-group mt-2">
            <label for="inputName" class="form-label">Banner Sub Title<span class="error"> </span></label>
            <input type="text" name="sub_title" data-required="1" placeholder="Banner Sub Title" class="form-control" id="sub_title"  />
            </div>
            <div class="form-group mt-2">
               <label for="inputName" class="form-label">Banner Image<span class="error">* </span></label><br>
            <input type="file" name="banner_img" id="banner_img">
            </div>   

             <div class="form-group mt-2">
               <label for="inputName" class="form-label">Banner Position<span class="error">* </span></label><br>
            <input type="number" name="position" data-required="1" placeholder="Banner Position" class="form-control" id="position"  />
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
    </div> 

  <!-- ======= Footer ======= -->
  <!-- footerContent -->

  <?php $this->load->view('Backend/footerContent'); ?>
      <!-- End Footer -->

  <?php $this->load->view('footer'); ?>
   <script>
        // jQuery code
        $(document).ready(function() {
            // When the button is clicked, trigger a click event on the file input
            $('#uploadBtn').click(function() {
                $('#fileInput').click();
            });

            // Handle file selection
            $('#fileInput').change(function() {
                const selectedFile = $(this)[0].files[0];
                if (selectedFile) {
                    // You can now work with the selected file, e.g., upload it to a server.
                    console.log('Selected file:', selectedFile.name);
                }
            });
        });

    //     $(document).on('click', '.form-submit-button', function(event) {
    //     event.preventDefault();
        
    //     var form = $(this).closest('form'); // Find the parent form
    //     var formData = new FormData(form[0]); // Create FormData from the form
    //     console.log(form)
    //     console.log(formData)
    //     $.ajax({
    //         type: 'post',
    //         url: form.attr('action'), // Use the form's action attribute as the URL
    //         data: formData,
    //         contentType: false,
    //         processData: false,
    //         success: function(resp) {
    //             var data = $.parseJSON(resp);
    //             if (data.status == 'success') {
    //                 form[0].reset(); // Reset the form

    //                 // Close the modal (if using modals)
    //                 form.closest('.modal').modal('hide');
    //                 $('.modal-backdrop').remove();

    //                 // Show success message
    //                 $.wnoty({
    //                     type: 'success',
    //                     message: data.message,
    //                     autohideDelay: 1000,
    //                     position: 'top-right'
    //                 });

    //                 // Reload the page after a delay (optional)
    //                 setTimeout(function() {
    //                     location.reload(true);
    //                 }, 2000);
    //             } else if (data.status == 'error') {
    //                 // Show error message
    //                 $.wnoty({
    //                     type: 'error',
    //                     message: data.message,
    //                     autohideDelay: 2000,
    //                     position: 'top-right'
    //                 });

    //                 // Reload the page after a delay (optional)
    //                 setTimeout(function() {
    //                     location.reload(true);
    //                 }, 2000);
    //             }
    //         },
    //     });

    //     return false;
    // });

        $(document).on('click', '.form-submit-button', function(event) {
        event.preventDefault();

        var form = $(this).closest('form');
        var formData = new FormData(form[0]);
      
     
        // Add the form identifier to the formData
       // formData.append('form_identifier', form.find('input[name="form_identifier"]').val());

        $.ajax({
            type: 'post',
            url: form.attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
              //var data = $.parseJSON(resp);
             // console.log(data)
             if (data.status == 'success') {
                 $.wnoty({
                        type: 'success',
                        message: data.message,
                        autohideDelay: 1000,
                        position: 'top-right'
                    });
               }
            },
        });

        return false;
    });

    //home banner

 $(document).on('click','#save_member',function(){
        event.preventDefault();
    

      

           if( $("#title").val() != '' && $("#banner_img").val() != ''&& $("#position").val() != '' ){ 

            $.ajax({
            type:'post',
            url: '<?php echo base_url("Dashboard/add_banner");?>',
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
            $('#bannertbl').on('click', '.tblEditBtn', function() {
                // Get the data attributes from the button
                var id = $(this).data('id');
                $('.modal-title').text("Edit Banner")
                // Make an AJAX request to retrieve the data for the ID
                $.ajax({
                    url: '<?php echo base_url("Dashboard/getBannerByID"); ?>?id=' + id, // Adjust the URL to match your product retrieval endpoint
                    method: 'GET',
                    //data: { id: id },
                    dataType: 'json',
                    success: function(response) {
                        // Populate the modal with the data returned from the server
                        $('#Editverticalycentered [name="id"]').val(response.id);
                        $('#Editverticalycentered [name="title"]').val(response.title);
                        $('#Editverticalycentered [name="sub_title"]').val(response.sub_title);
                        $('#Editverticalycentered [name="position"]').val(response.position);
                        // $('#Editverticalycentered [name="price"]').val(response.price);

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
                url: '<?php echo base_url("Dashboard/update_banner");?>',
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
        url: '<?php echo base_url('Dashboard/DeleteBanner') ?>',
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