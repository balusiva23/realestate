<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Login </title>
  <?php $this->load->view('header'); ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              

              <div class="card mb-3">
              <div class="d-flex justify-content-center pt-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="" style="width: 150px;height: auto;max-height:unset;">
                  <!-- <span class="d-none d-lg-block">Recipe Management System</span> -->
                </a>
              </div><!-- End Logo -->
                <div class="card-body">

                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                    <!-- <p class="text-center small">Enter your email & password to login</p> -->
                  </div>

                  <form class="row g-3" id="loginform" novalidate method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="email" name="email" class="form-control" id="email" required value="<?php echo $this->input->cookie('username'); ?>">
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                      <label id="email-error" class="error" for="email" style="display:none">This field is required.</label>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="pswd" required value="<?php echo base64_decode($this->input->cookie('password')); ?>">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12 m-3">
                    <div class="row">
                      <div class="form-check col-md-7">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" <?php if($this->input->cookie('username')) echo 'Checked'; ?>>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div> 
                      <div class="form-check col-md-5 ">
                        <input type="checkbox" class="form-check-input  toggle-password" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Show Password</label>
                      </div>
                    </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" id="signin">Login</button>
                    </div>
                    <!-- <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="<?php echo base_url(); ?>signup">Create an account</a></p>
                    </div> -->
                  </form>

                </div>
              </div>

           
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


   <?php $this->load->view('footer'); ?>
</body>

</html>
<script>
     $(document).on('click','#signin',function(){
        event.preventDefault();
           $("#loginform").valid();
           var email = $("#email").val();
            var password=$("#pswd").val();
            
           

        if(email != '' && password != ''  ){ // 
          
         $.ajax({
        type:'post',
        url: '<?php echo base_url("login/Login_Auth");?>',
        data: new FormData($("#loginform")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#loginform')[0].reset();
        $.wnoty({
        type: 'success',
        message: 'Login Successfully',
        autohideDelay: 500,
        position: 'top-right'

        });
        setTimeout(function(){
        window.location.href = '<?php echo base_url()?>'+data.url;
        },1000);
       }else if(data.status == 'error'){
      
              $.wnoty({
                    type: 'error',
                    message: data.message,
                    autohideDelay: 1000,
                    position: 'top-right'

                    });
               setTimeout(function(){
            window.location.href = '<?php echo base_url()?>'+data.url;
            },2000);
        }
        },
        });
        }
     
        return false;
        })

     

</script>
<script>
$(document).ready(function() {
  $('#togglePassword').click(function() {
    const passwordInput = $('#pswd');
    const passwordFieldType = passwordInput.attr('type');

    // Toggle the password field between password and text type
    if (passwordFieldType === 'password') {
      passwordInput.attr('type', 'text');
      $('#togglePassword').removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
      passwordInput.attr('type', 'password');
      $('#togglePassword').removeClass('fa-eye-slash').addClass('fa-eye');
    }
  });
});

 $(document).ready(function() {
      // Show/hide password
      $('.toggle-password').change(function() {
        var passwordInput = $('input[name="password"]');
        var confirmPasswordInput = $('input[name="cpassword"]');
        var passwordFieldType = passwordInput.attr('type');
        var confirmPasswordFieldType = confirmPasswordInput.attr('type');
        
        // Toggle password visibility for password field
        if (passwordFieldType === 'password') {
          passwordInput.attr('type', 'text');
        } else {
          passwordInput.attr('type', 'password');
        }
        
        // Toggle password visibility for confirm password field
        if (confirmPasswordFieldType === 'password') {
          confirmPasswordInput.attr('type', 'text');
        } else {
          confirmPasswordInput.attr('type', 'password');
        }
      });
      });

</script>