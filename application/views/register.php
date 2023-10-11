<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SignUp</title>
  <?php $this->load->view('header'); ?>


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <!--       <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
              
                     <span class="d-none d-lg-block"></span>
                </a>
              </div> --><!-- End Logo -->

              <div class="card mb-3">
                  <div class="d-flex justify-content-center pt-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="<?php echo base_url(); ?>assets/web/img/logo.png" alt="" style="width: 150px;height: auto;max-height:unset;">
                  <!-- <span class="d-none d-lg-block">Recipe Management System</span> -->
                </a>
              </div><!-- End Logo -->
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Sign up</h5>
                    <!-- <p class="text-center small">Enter your personal details to create account</p> -->
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST" id="register-form">
                    <div class="col-12">
                      <label for="yourName" class="form-label"> Name</label>
                      <input type="text" name="uname" class="form-control" id="uname" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label"> Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div> 

                     <div class="col-12">
                      <label for="yourEmail" class="form-label">Mobile Number</label>
                      <input type="text" name="number" class="form-control" id="number" required>
                      <div class="invalid-feedback">Please enter a valid !</div>
                    </div>
                  <!-- 
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div> -->

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="pswd" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                  <div class="col-12">
                      <div class="form-check ">
                          <input type="checkbox" class="form-check-input  toggle-password" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>
                  </div>
              


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="signup" id="savepass">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?php echo base_url(); ?>login">Log in</a></p>
                    </div>
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
   <script type="text/javascript">
        $(document).on('click','#savepass',function(){
        event.preventDefault();
           $("#register-form").valid();
            var name = $("#uname").val();
            var email = $("#email").val();
            var password=$("#pswd").val();

            var number=$("#number").val();
           
         // if (number.length > 10) {
         //  return;
         // }
     

        if(name != '' && password != '' && number != '' ){ //email != '' && 
       
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Login/saveuser");?>',
        data: new FormData($("#register-form")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        //console.log(data)
        if(data.status == 'success'){
        $('#register-form')[0].reset();
        $.wnoty({
        type: 'success',
        message: data.message,
        autohideDelay: 1000,
        position: 'top-right'

        });
        setTimeout(function(){
        window.location.href = '<?php echo base_url()?>login';
        },2000);
       }else if(data.status == 'error'){
      
              $.wnoty({
                    type: 'error',
                    message: data.message,
                    autohideDelay: 1000,
                    position: 'top-right'

                    });
        }
        },
        });
        }
     
        return false;
        })

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

</body>

</html>