<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require FCPATH .'assets/phpmailer/phpmailer/src/Exception.php';
require FCPATH .'assets/phpmailer/phpmailer/src/PHPMailer.php';
require FCPATH .'assets/phpmailer/phpmailer/src/SMTP.php';


class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	   function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');

       $this->load->model('Common_model');
        $this->load->model('Property_model');
        // Set the settings data in the constructor
       $this->data['settings'] = $this->Common_model->getSettings();//settings
            
    }
	public function index()
	{
    //  //settings
	// $data['settings'] = $this->Common_model->getSettings();
	//home_banners
	 $this->data['home_banners'] = $this->Common_model->getHomeBanner();
	 //getTestimonial
     $this->data['get_testimonial'] = $this->Common_model->getTestimonial();
	//Logos
    $this->data['get_brands'] = $this->Common_model->getLogo();
    //properties
  $this->data['get_properties'] = $this->Common_model->getProperties();
	$this->load->view('Frontend/index',$this->data);//$this->data
	}
	public function About()
	{
		$this->load->view('Frontend/about',$this->data);
	}
	
	public function Services()
	{
		$this->load->view('Frontend/services',$this->data);
	}

     public function ContactUs()
	{
		$this->load->view('Frontend/contact',$this->data);
	}  



	// ------------------properties-----------------------//

   public function Properties()
	{
		 //cities
         $this->data['get_cities'] = $this->Common_model->getcities();

         //properties
        $this->data['get_properties'] = $this->Common_model->getProperties();

		$this->data['get_propertytype'] = $this->Common_model->getpropertytype();
		$this->load->view('Frontend/properties',$this->data);
	}

	// New
		function fetch_data()
	{
		sleep(1);
		// $minimum_price = $this->input->post('minimum_price');
		// $maximum_price = $this->input->post('maximum_price');
		// $brand = $this->input->post('brand');
		// $ram = $this->input->post('ram');
		// $storage = $this->input->post('storage');
		$sale = $this->input->post('sale');
		$rent = $this->input->post('rent');
		$lease = $this->input->post('lease');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$property_type = $this->input->post('property_type');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		//$config["total_rows"] = $this->Property_model->count_all($minimum_price, $maximum_price, $brand, $ram, $storage);
		$config["total_rows"] = $this->Property_model->count_all($sale, $rent,$lease,$city,$area,$property_type);
		$config["per_page"] = 4;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		
		//new
		$config['full_tag_open'] = '<ul class="pagination">';        
    $config['full_tag_close'] = '</ul>';        
    $config['first_link'] = 'First';        
    $config['last_link'] = 'Last';        
    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['first_tag_close'] = '</span></li>';        
    $config['prev_link'] = '&laquo';        
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['prev_tag_close'] = '</span></li>';        
    $config['next_link'] = '&raquo';        
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['next_tag_close'] = '</span></li>';        
    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['last_tag_close'] = '</span></li>';        
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
    $config['cur_tag_close'] = '</a></li>';        
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
    $config['num_tag_close'] = '</span></li>';

		$config["num_links"] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];
		
		$output = array(
			'pagination_link'		=>	$this->pagination->create_links(),
			//'product_list'			=>	$this->Property_model->fetch_data($config["per_page"], $start, $minimum_price, $maximum_price, $brand, $ram, $storage)
			'product_list'			=>	$this->Property_model->fetch_data($config["per_page"], $start,$sale, $rent,$lease,$city,$area,$property_type)
		);
		echo json_encode($output);
	}
	
  //Simgle Propertyy
		public function SingleProperty()
	{
			$id = $this->input->get('I');
			$this->data['property_data'] = $this->Common_model->getPropertiesbyid($id);
			$this->data['properties_images'] = $this->Common_model->Single_properties_images($id);
			$this->data['properties_details'] = $this->Common_model->Get_properties_details($id);
			$this->data['properties_Conditions'] = $this->Common_model->Get_properties_Conditions($id);
			$this->data['properties_features'] = $this->Common_model->Get_properties_features($id);

			$this->data['get_floors'] = $this->Common_model->getfloors($id);
         // print_r( $this->data['get_floors']);die();

		$this->load->view('Frontend/single-property',$this->data);
	}
	

	 // -----------------contact us --------------------------------
		public function contactus_mail() {
	    $name = $this->input->post('name');
	    $email = $this->input->post('email');
	    $number = $this->input->post('phone');
	    $message = $this->input->post('message');

	    // Create the inquiry email
	    $inquiryMail = new PHPMailer(true);
	    ob_start();
	    ?>
	    <!-- Inquiry email HTML content -->
	  <html>
	  <head>
	      <meta charset="UTF-8">
	      <title></title>
	      <style>
	          body {
	              margin: 0;
	              padding: 0;
	              font-family: Arial, sans-serif;
	          }

	          .container {
	              max-width: 600px;
	              margin: 0 auto;
	              padding: 20px;
	              background-color: #F5F8FB;
	          }

	          h1 {
	              font-size: 24px;
	              margin-top: 0;
	          }

	          table {
	              width: 100%;
	          }

	          table td {
	              padding: 5px;
	          }

	          .btn {
	              display: inline-block;
	              padding: 10px 20px;
	              background-color: #2196F3;
	              color: #ffffff;
	              text-decoration: none;
	              border-radius: 2px;
	              font-weight: bold;
	          }

	          .caption {
	              font-size: 12px;
	              color: #616161;
	          }

	          .signature {
	              margin-top: 20px;
	              font-size: 12px;
	          }

	          .logo-image {
	              display: inline-block;
	              vertical-align: middle;
	          }

	          .logo-image img {
	              max-width: 70px;
	              height: auto;
	          }

	          .unsubscribe-link {
	              display: inline-block;
	              margin-right: 10px;
	              text-decoration: none;
	              color: #616161;
	          }
	      </style>
	  </head>
	  <body>
	      <div class="container">
	          <h1>HI !! You have recived new enquiry today </h1>

	          <table>
	              <tr>
	                  <td><strong>Name</strong></td>
	                  <td><?php if(isset($name)) { echo  $name; } ?></td>
	              </tr>
	              <tr>
	                  <td><strong>Email</strong></td>
	                    <td><?php if(isset($email)) { echo  $email; } ?></td>
	              </tr>
	              <tr>
	                  <td><strong>Phone</strong></td>
	                    <td><?php if(isset($number)) { echo  $number; } ?></td>
	              </tr> 
	               <tr>
	                  <td><strong>Message</strong></td>
	                    <td><?php if(isset($message)) { echo  $message; } ?></td>
	              </tr>
	          </table>

	       <!--    <p style="text-align:center;">
	              <a href="#" class="btn">EXAMPLE BUTTON</a>
	          </p>
	          <p style="text-align:center;">
	              <a href="#" class="unsubscribe-link">Unsubscribe</a>
	              <span>|</span>
	              <a href="#" class="unsubscribe-link">Account Settings</a>
	          </p> -->
	          <!-- <p class="caption">This is a caption text in the main email body.</p> -->

	          <div class="signature">
	              <p>
	              Thank you,<br>
	            Nineteen Square Corporate Services Private Limited,<br>
	             No 19, <br>B. No 4784/J1/Sf 19, <br>Pride Icon, Gokul Road,<br> Hubli - 580030</p>
	              </p>
	             <!--  <p>
	                  Support: <a href="mailto:#">info@whello.id</a>
	              </p> -->
	              <!-- <div class="logo-image">
	                  <a href="#" target="_blank">
	                      <img src="https://zavoloklom.github.io/material-design-iconic-font/icons/mstile-70x70.png" alt="logo-alt">
	                  </a>
	              </div> -->
	          </div>
	      </div>
	  </body>
	  </html>
	    <?php
	    $inquiryMessage = ob_get_clean();

	    try {
	        // Configure and send the inquiry email
	        $inquiryMail->isSMTP();
	        $inquiryMail->Host = 'smtp.gmail.com';
	        $inquiryMail->SMTPAuth = true;
	        $inquiryMail->Username = USERNAME;
	        $inquiryMail->Password = PASSWORD;
	        $inquiryMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	        $inquiryMail->Port = 465;
	        $inquiryMail->setFrom(FROM, FROMNAME);
	        $inquiryMail->addAddress(FROM, FROMNAME);
	        $inquiryMail->isHTML(true);
	        $inquiryMail->Subject = 'New Enquiry!!!';
	        $inquiryMail->Body = $inquiryMessage;

	        // Create the thank you email
	        $thankYouMail = new PHPMailer(true);
	        ob_start();
	        ?>
	    <html>
	    <head>
	        <style>
	            /* CSS styles for the email content */
	            body {
	                font-family: Arial, sans-serif;
	              
	            }
	            
	            .container {
	                max-width: 600px;
	                margin: 0 auto;
	                padding: 20px;
	                background-color: #F5F8FB;
	            }
	            
	            h1 {
	                font-size: 24px;
	                color: #333333;
	                margin-bottom: 20px;
	            }
	            
	            p {
	                font-size: 16px;
	                color: #666666;
	                margin-bottom: 10px;
	            }
	            
	            .cta-button {
	                display: inline-block;
	                padding: 10px 20px;
	                background-color: #337ab7;
	                color: #ffffff;
	                text-decoration: none;
	                border-radius: 5px;
	            }
	            
	            .footer {
	/*                text-align: center;*/
	                margin-top: 20px;
	                padding: 10px;
	            }
	            
	            .footer p {
	                font-size: 14px;
	                color: #999999;
	                margin-bottom: 5px;
	            }
	        </style>
	    </head>
	    <body style="background-color: ">
	        <div class="container" style="background-color: #F5F8FB; max-width: 600px; margin: 0 auto; padding: 20px;">
	             <h1>Thank You for Your Inquiry!</h1>
	            <p>Dear <?php echo $name; ?>,</p>
	            <p>We have received your inquiry and will get back to you as soon as possible.</p>
	            <p>If you have any questions or need further assistance, feel free to contact us</p>
	             <!-- <a href="mailto:infoassisthealth@gmail.com">infoassisthealth@gmail.com</a>. -->
	            <p><a href="<?php echo base_url()?>" style="display: inline-block; padding: 10px 20px; background-color: #337ab7; color: #ffffff; text-decoration: none; border-radius: 5px;">Visit Our Website</a></p>

	              <div class="footer" >
	            <!-- <p>Thank you,</p>
	            <p>Assist Health</p> -->
	             <p>
	              Thank you,<br>
	            Nineteen Square Corporate Services Private Limited,<br>
	             No 19, <br>B. No 4784/J1/Sf 19, <br>Pride Icon, Gokul Road,<br> Hubli - 580030</p>
	              </p>
	        </div>
	        </div>
	       
	      
	       
	    </body>
	    </html>
	        <?php
	        $thankYouMessage = ob_get_clean();

	        // Configure and send the thank you email
	        $thankYouMail->isSMTP();
	        $thankYouMail->Host = 'smtp.gmail.com';
	        $thankYouMail->SMTPAuth = true;
	        $thankYouMail->Username = USERNAME;
	        $thankYouMail->Password = PASSWORD;
	        $thankYouMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	        $thankYouMail->Port = 465;
	        $thankYouMail->setFrom(FROM, FROMNAME);
	        $thankYouMail->addAddress($email, $name);
	        $thankYouMail->isHTML(true);
	        $thankYouMail->Subject = 'Thank you for your inquiry!';
	        $thankYouMail->Body = $thankYouMessage;

	        // Send both emails
	        if ($inquiryMail->send() && $thankYouMail->send()) {
	            echo json_encode(array('status' => 'success', 'message' => 'Register Successfully!!'));
	        } else {
	            //echo json_encode(array('status' => 'error', 'message' => 'Error in sending emails.'));
	        }
	    } catch (Exception $e) {
	       // echo json_encode(array('status' => 'error', 'message' => "An error occurred. {$e->getMessage()}"));
	    }
	}
}
