 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;

class Dashboard extends CI_Controller {

	    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->database();
        $this->load->model('login_model');
        //$this->load->model('dashboard_model'); 
   
       //$this->load->library('Role'); 
        	$this->load->model('Common_model');
               $this->getAdminDetails();
    }
        //check login
    	private function checkLogin()
    	{
    	    if (!$this->session->userdata('user_login_access')) {
    	        redirect(base_url() . 'login'); // Redirect to the login page if not logged in
    	    }
    	}
           private function getAdminDetails() {
            $this->checkLogin();
            $adminId = $this->session->userdata('user_login_id');
            $adminDetails['admin_data'] = $this->login_model->getAdminDetails($adminId);
            $this->load->vars($adminDetails); // Make $adminDetails available in all views
        }
        
      // ---------------------------Pages --------------------------//
	     public function index()
	  	{
		    $this->checkLogin(); // Add this line to check login
		    $this->load->view('Backend/dashboard');
		}
        public function Settings()
        {
        $this->checkLogin(); // Add this line to check login

        $data['tbl_data'] = $this->Common_model->getSettings();
        $data['home_banners'] = $this->Common_model->getHomeBanner();
        $this->load->view('Backend/settings',$data);
        }  
        public function Testimonials()
        {
        $this->checkLogin(); // Add this line to check login
        //getTestimonial
        $data['get_datas'] = $this->Common_model->getTestimonial();
        $this->load->view('Backend/testimonials',$data);
        }
         public function BrandLogos()
        {
        $this->checkLogin(); // Add this line to check login
        //getTestimonial
        $data['get_datas'] = $this->Common_model->getLogo();
        $this->load->view('Backend/brand-logos',$data);
        }  
        //Properties
         public function AddProperties()
        {
        $this->checkLogin(); // Add this line to check login
    
        $this->load->view('Backend/properties/add_properties');
        }  
         public function EditProperties()
        {
        $this->checkLogin(); // Add this line to check login
        //getProperties
        $id = $this->input->get('I');
        $data['data'] = $this->Common_model->getPropertiesbyid($id);
        $this->load->view('Backend/properties/edit_properties',$data);
        }
         public function ViewProperties()
        {
        $this->checkLogin(); // Add this line to check login
        //getTestimonial
        $data['get_datas'] = $this->Common_model->getProperties();
        $this->load->view('Backend/properties/view_properties',$data);
        }

         //pages

    
    // ---------------------------Settings --------------------------//
	  public function submitForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formIdentifier = $this->input->post('form_identifier');
            $data = array(); // Initialize an empty data array to store the response data

            // Handle form_logo submission
            if ($formIdentifier === 'form_logo') {
             
                   if($_FILES['photo_logo']['name']){
                        $file_name = $_FILES['photo_logo']['name'];
                        $fileSize = $_FILES["photo_logo"]["size"]/1024;
                        $fileType = $_FILES["photo_logo"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/logo",
                            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('photo_logo')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'logo'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Logo updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'logo'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Logo inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                }
                // Handle other forms similarly
       
            
            // Handle form_favicon submission
            elseif ($formIdentifier === 'form_favicon') {
               
                   if($_FILES['photo_favicon']['name']){
                        $file_name = $_FILES['photo_favicon']['name'];
                        $fileSize = $_FILES["photo_favicon"]["size"]/1024;
                        $fileType = $_FILES["photo_favicon"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/favicon",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('photo_favicon')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'favicon'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Logo updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'favicon'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Logo inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                } 
                 elseif ($formIdentifier === 'form_topbar') {
               
         
              
                     // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                $data = array(
                                    'top_bar_email' => $this->input->post('top_bar_email'),
                                    'top_bar_phone' => $this->input->post('top_bar_phone'),
                                    'top_bar_location' => $this->input->post('top_bar_location'),
                                   );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Data updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                            $data = array(
                                'top_bar_email' => $this->input->post('top_bar_email'),
                                    'top_bar_phone' => $this->input->post('top_bar_phone'),
                                    'top_bar_location' => $this->input->post('top_bar_location'),
                                   );
                              
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Data inserted successfully';
                            }
                }      
                elseif ($formIdentifier === 'form_banner_about') {
               
                   if($_FILES['banner_about']['name']){
                        $file_name = $_FILES['banner_about']['name'];
                        $fileSize = $_FILES["banner_about"]["size"]/1024;
                        $fileType = $_FILES["banner_about"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/banner",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('banner_about')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'banner_about'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Banner updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'banner_about'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Banner inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                } elseif ($formIdentifier === 'form_banner_properties') {
               
                   if($_FILES['banner_properties']['name']){
                        $file_name = $_FILES['banner_properties']['name'];
                        $fileSize = $_FILES["banner_properties"]["size"]/1024;
                        $fileType = $_FILES["banner_properties"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/banner",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('banner_properties')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'banner_properties'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Banner updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'banner_properties'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Banner inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                }elseif ($formIdentifier === 'form_banner_service') {
               
                   if($_FILES['banner_service']['name']){
                        $file_name = $_FILES['banner_service']['name'];
                        $fileSize = $_FILES["banner_service"]["size"]/1024;
                        $fileType = $_FILES["banner_service"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/banner",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('banner_service')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'banner_service'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Banner updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'banner_service'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Banner inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                }elseif ($formIdentifier === 'form_banner_contact') {
               
                   if($_FILES['banner_contact']['name']){
                        $file_name = $_FILES['banner_contact']['name'];
                        $fileSize = $_FILES["banner_contact"]["size"]/1024;
                        $fileType = $_FILES["banner_contact"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/banner",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('banner_contact')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {
                            $file_data = $this->upload->data();
                            $img_url = $file_data['file_name'];

                            // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                 $data = array(
                                    'banner_contact'=>$img_url
                                );
                                
                                $this->Common_model->updateData($data);
                                $data['message'] = 'Banner updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                                $data = array(
                                    'banner_contact'=>$img_url
                                );
                                $this->Common_model->insertData($data);
                                $data['message'] = 'Banner inserted successfully';
                            }

                            $data['status'] = 'success';
                        }
                    }
                } 
                elseif ($formIdentifier === 'form_footer') {
               
         
              
                     // Check if the image already exists in the database
                            $existingImage = $this->Common_model->dataExists();

                            if ($existingImage) {
                                // If it exists, update the image URL
                                $data = array(
                                    'footer_email' => $this->input->post('footer_email'),
                                    'footer_phone' => $this->input->post('footer_phone'),
                                    'footer_location' => $this->input->post('footer_location'),
                                    'footer_content' => $this->input->post('footer_content'),
                                   );
                                
                                $this->Common_model->updateData($data);
                                $data['status'] = 'success';
                                $data['message'] = 'Data updated successfully';
                            } else {
                                // If it doesn't exist, insert the new image
                            $data = array(
                                'footer_email' => $this->input->post('footer_email'),
                                    'footer_phone' => $this->input->post('footer_phone'),
                                    'footer_location' => $this->input->post('footer_location'),
                                    'footer_content' => $this->input->post('footer_content'),
                                   );
                              
                                $this->Common_model->insertData($data);
                                    $data['status'] = 'success';
                                $data['message'] = 'Data inserted successfully';
                            }
                }
                // Handle other forms similarly 
            
            // Add more elseif blocks for other forms as needed
            
            else {
                $data['status'] = 'error';
                $data['message'] = 'Invalid form identifier';
            }

            // Respond with JSON
            header('Content-Type: application/json');
            echo json_encode($data);
        }
        }

             public function add_banner() {
           
             if($_FILES['banner_img']['name']){
                $file_name = $_FILES['banner_img']['name'];
                $fileSize = $_FILES["banner_img"]["size"]/1024;
                $fileType = $_FILES["banner_img"]["type"];
                $new_file_name='';
                $new_file_name .= $file_name;

                $config = array(
                    'file_name' => $new_file_name,
                    'upload_path' => "./assets/uploads/banner",
                    'allowed_types' => "gif|jpg|png|jpeg|ico",
                    'overwrite' => TRUE,
                    'max_size' => "50720000"
                );
                //create directory
                  if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
        
                $this->load->library('Upload', $config);
                $this->upload->initialize($config);                
                if (!$this->upload->do_upload('banner_img')) {
                    echo $this->upload->display_errors();
                    #redirect("notice/All_notice");
                }else {

            $file_data = $this->upload->data();
            $img_url = $file_data['file_name'];     
            $data = array(

                'title' => $this->input->post('title'),
                'sub_title' => $this->input->post('sub_title'),
                'position' => $this->input->post('position'),
                 'banner_img'=>$img_url
               
            );
            $table = 'tbl_home_banner';
         
        
                $result = $this->Common_model->insert($data,$table); 
          
           

            if ($result) {
                // Success: Product inserted
                echo json_encode(array('status' => 'success', 'message' => 'Banner Added successfully'));
            } else {
                // Error: Product not inserted
                echo json_encode(array('status' => 'error', 'message' => 'Banner Not Added'));
            }
          }
        }
        }        
        public function update_banner() {
       
         if($_FILES['banner_img']['name']){
            $file_name = $_FILES['banner_img']['name'];
            $fileSize = $_FILES["banner_img"]["size"]/1024;
            $fileType = $_FILES["banner_img"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/banner",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('banner_img')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {

        $file_data = $this->upload->data();
        $img_url = $file_data['file_name'];     
        $data = array(

            'title' => $this->input->post('title'),
            'sub_title' => $this->input->post('sub_title'),
            'position' => $this->input->post('position'),
             'banner_img'=>$img_url
           
        );
        $table = 'tbl_home_banner';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Banner Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Banner Not Updated'));
        }
      }
    }else{
       $data = array(

            'title' => $this->input->post('title'),
            'sub_title' => $this->input->post('sub_title'),
            'position' => $this->input->post('position'),
    
           
        );
        $table = 'tbl_home_banner';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Banner Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Banner Not Updated'));
        } 
    }
    }
       

        public function getBannerByID() {
        $id = $this->input->get('id');
        // Call the model method to retrieve product details by ID
        $product = $this->Common_model->getBannerByID($id);

        // Check if the product exists
        if ($product) {
            // Send the product details as JSON response
            echo json_encode($product);
        } else {
            // Product not found
            echo json_encode(array('error' => 'Product not found'));
        }
    }

    public function DeleteBanner() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'tbl_home_banner';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Banner deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Banner deletion failed'));
        }
    }

    // ---------------------------Testimonial --------------------------//
      public function add_testimonial() {
           
             if($_FILES['customer_image']['name']){
                $file_name = $_FILES['customer_image']['name'];
                $fileSize = $_FILES["customer_image"]["size"]/1024;
                $fileType = $_FILES["customer_image"]["type"];
                $new_file_name='';
                $new_file_name .= $file_name;

                $config = array(
                    'file_name' => $new_file_name,
                    'upload_path' => "./assets/uploads/testimonials",
                    'allowed_types' => "gif|jpg|png|jpeg|ico",
                    'overwrite' => TRUE,
                    'max_size' => "50720000"
                );
                //create directory
                  if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
        
                $this->load->library('Upload', $config);
                $this->upload->initialize($config);                
                if (!$this->upload->do_upload('customer_image')) {
                    echo $this->upload->display_errors();
                    #redirect("notice/All_notice");
                }else {

            $file_data = $this->upload->data();
            $img_url = $file_data['file_name'];     
            $data = array(

                'customer_name' => $this->input->post('customer_name'),
                'customer_position' => $this->input->post('customer_position'),
                'comments' => $this->input->post('comments'),
                'position' => $this->input->post('position'),
                 'customer_image'=>$img_url
               
            );
            $table = 'testimonials';
         
        
                $result = $this->Common_model->insert($data,$table); 
          
           

            if ($result) {
                // Success: Product inserted
                echo json_encode(array('status' => 'success', 'message' => 'Testimonial Added successfully'));
            } else {
                // Error: Product not inserted
                echo json_encode(array('status' => 'error', 'message' => 'Testimonial Not Added'));
            }
          }
        }
        }        
        public function update_testimonial() {
       
         if($_FILES['customer_image']['name']){
            $file_name = $_FILES['customer_image']['name'];
            $fileSize = $_FILES["customer_image"]["size"]/1024;
            $fileType = $_FILES["customer_image"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/testimonials",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('customer_image')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {

        $file_data = $this->upload->data();
        $img_url = $file_data['file_name'];     
        $data = array(
               'customer_name' => $this->input->post('customer_name'),
                'customer_position' => $this->input->post('customer_position'),
                'comments' => $this->input->post('comments'),
                'position' => $this->input->post('position'),
                 'customer_image'=>$img_url
           
        );
        $table = 'testimonials';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Testimonial Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Testimonial Not Updated'));
        }
      }
    }else{
       $data = array(

               'customer_name' => $this->input->post('customer_name'),
                'customer_position' => $this->input->post('customer_position'),
                'comments' => $this->input->post('comments'),
                'position' => $this->input->post('position'),
              
        );
        $table = 'testimonials';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Testimonial Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Testimonial Not Updated'));
        } 
    }
    }
       

        public function getTestimonialByID() {
        $id = $this->input->get('id');
        // Call the model method to retrieve product details by ID
        $product = $this->Common_model->getTestimonialByID($id);

        // Check if the product exists
        if ($product) {
            // Send the product details as JSON response
            echo json_encode($product);
        } else {
            // Product not found
            echo json_encode(array('error' => 'Product not found'));
        }
    }

     public function DeleteTestimonial() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'testimonials';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Testimonial deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Testimonial deletion failed'));
        }
    }
    // ---------------------------Brand Logo --------------------------//
      public function add_brand() {
           
             if($_FILES['brand_logo']['name']){
                $file_name = $_FILES['brand_logo']['name'];
                $fileSize = $_FILES["brand_logo"]["size"]/1024;
                $fileType = $_FILES["brand_logo"]["type"];
                $new_file_name='';
                $new_file_name .= $file_name;

                $config = array(
                    'file_name' => $new_file_name,
                    'upload_path' => "./assets/uploads/brands",
                    'allowed_types' => "gif|jpg|png|jpeg|ico",
                    'overwrite' => TRUE,
                    'max_size' => "50720000"
                );
                //create directory
                  if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
        
                $this->load->library('Upload', $config);
                $this->upload->initialize($config);                
                if (!$this->upload->do_upload('brand_logo')) {
                    echo $this->upload->display_errors();
                    #redirect("notice/All_notice");
                }else {

            $file_data = $this->upload->data();
            $img_url = $file_data['file_name'];     
            $data = array(

                'brand_name' => $this->input->post('brand_name'),
                'position' => $this->input->post('position'),
                 'brand_logo'=>$img_url
               
            );
            $table = 'brands';
         
        
                $result = $this->Common_model->insert($data,$table); 
          
           

            if ($result) {
                // Success: Product inserted
                echo json_encode(array('status' => 'success', 'message' => 'Logo Added successfully'));
            } else {
                // Error: Product not inserted
                echo json_encode(array('status' => 'error', 'message' => 'Logo Not Added'));
            }
          }
        }
        }        
        public function update_brand() {
       
         if($_FILES['brand_logo']['name']){
            $file_name = $_FILES['brand_logo']['name'];
            $fileSize = $_FILES["brand_logo"]["size"]/1024;
            $fileType = $_FILES["brand_logo"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/brands",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('brand_logo')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {

        $file_data = $this->upload->data();
        $img_url = $file_data['file_name'];     
        $data = array(
              
                'brand_name' => $this->input->post('brand_name'),
                'position' => $this->input->post('position'),
                 'brand_logo'=>$img_url
           
        );
        $table = 'brands';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Logo Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Logo Not Updated'));
        }
      }
    }else{
       $data = array(

              
                'brand_name' => $this->input->post('brand_name'),
                'position' => $this->input->post('position'),
              
              
        );
        $table = 'brands';
                   
           $id = $this->input->post('id');
          $result = $this->Common_model->update($data,$table,$id );
       
       

        if ($result) {
            // Success: Product inserted
            echo json_encode(array('status' => 'success', 'message' => 'Logo Updated successfully'));
        } else {
            // Error: Product not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Logo Not Updated'));
        } 
    }
    }
       

        public function getbrandByID() {
        $id = $this->input->get('id');
        // Call the model method to retrieve product details by ID
        $product = $this->Common_model->getLogoByID($id);

        // Check if the product exists
        if ($product) {
            // Send the product details as JSON response
            echo json_encode($product);
        } else {
            // Product not found
            echo json_encode(array('error' => 'Product not found'));
        }
    }

     public function Deletebrand() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'brands';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Logo deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Logo deletion failed'));
        }
    }
     // ---------------------------Profile --------------------------//
    public function Profile()
    {
    $this->checkLogin(); // Add this line to check login

    //users
     $table = 'users';
     $id = $this->session->userdata('user_login_id');
     $data['get_datas'] = $this->Common_model->getDataByID($id,$table);
     $this->load->view('Backend/profile',$data);
    }
    //update-profile
      public function UpdateProfile() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formIdentifier = $this->input->post('form_identifier');
            $data = array(); // Initialize an empty data array to store the response data

            // Handle form_logo submission
            if ($formIdentifier === 'form_profile') {
             
                   
                     if($_FILES['profile_img']['name']){
                        $file_name = $_FILES['profile_img']['name'];
                        $fileSize = $_FILES["profile_img"]["size"]/1024;
                        $fileType = $_FILES["profile_img"]["type"];
                        $new_file_name='';
                        $new_file_name .= $file_name;

                        $config = array(
                            'file_name' => $new_file_name,
                            'upload_path' => "./assets/uploads/profile",
                            'allowed_types' => "gif|jpg|png|jpeg|ico",
                            'overwrite' => TRUE,
                            'max_size' => "50720000"
                        );
                        //create directory
                          if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
                
                        $this->load->library('Upload', $config);
                        $this->upload->initialize($config);                
                        if (!$this->upload->do_upload('profile_img')) {
                            echo $this->upload->display_errors();
                            #redirect("notice/All_notice");
                        }else {

                    $file_data = $this->upload->data();
                    $img_url = $file_data['file_name'];     
                    $data = array(

                        'name' => $this->input->post('name'),
                        'number' => $this->input->post('number'),
                        'email' => $this->input->post('email'),
                         'profile'=>$img_url
                       
                    );
                    $table = 'users';
                               
                       $id = $this->input->post('id');
                      $result = $this->Common_model->update($data,$table,$id );
                   
                      if($result){
                          $data['status'] = 'success';
                         $data['message'] = 'Data updated successfully';
                      }

                  }
                }else{
                   $data = array(

                        'name' => $this->input->post('name'),
                        'number' => $this->input->post('number'),
                        'email' => $this->input->post('email'),
                
                       
                    );
                    $table = 'users';
                               
                       $id = $this->input->post('id');
                      $result = $this->Common_model->update($data,$table,$id );
                   
                    if($result){
                          $data['status'] = 'success';
                         $data['message'] = 'Data updated successfully';
                      }

                }
                           
                 }
                // Handle other forms similarly
       
           
                 elseif ($formIdentifier === 'form_password') {
               
                    $password = $this->input->post('password');
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

              
                        // If it exists, update the image URL
                        $data = array(
                            'password' =>$hashed_password,
                           
                           );
                        $table = 'users';
                               
                        $id = $this->input->post('id');
                          $result = $this->Common_model->update($data,$table,$id );
                         if($result){
                        $data['status'] = 'success';
                        $data['message'] = 'Data updated successfully';
                         }
                  
                }      
           
                // Handle other forms similarly 
            
            // Add more elseif blocks for other forms as needed
            
            else {
                $data['status'] = 'error';
                $data['message'] = 'Invalid form identifier';
            }

            // Respond with JSON
            header('Content-Type: application/json');
            echo json_encode($data);
        }
        }

        // ---------------------------Properties --------------------------//

        public function add_properties() {
        // Check if the 'thumnail' file is uploaded
        if ($_FILES['thumnail']['name']) {
            $thumnail_file_name = $_FILES['thumnail']['name'];
            // Handle file upload and validation here similar to your previous code
            $file_name = $_FILES['thumnail']['name'];
            $fileSize = $_FILES["thumnail"]["size"]/1024;
            $fileType = $_FILES["thumnail"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/properties/thumnail",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('thumnail')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {

            $file_data = $this->upload->data();
            //$img_url = $file_data['file_name'];     
            // If the upload is successful, get the file name
            $thumnail_img_url = $file_data['file_name'];
          }
        } else {
            // Handle the case where 'thumnail' file is required but not provided
            echo json_encode(array('status' => 'error', 'message' => 'Thumbnail image is required.'));
            return;
        }

        // Check if the 'floorimg' file is uploaded (optional)
        if ($_FILES['floorimg']['name']) {
            $floorimg_file_name = $_FILES['floorimg']['name'];
            // Handle file upload and validation for 'floorimg' here (similar to 'thumnail')
             $file_name = $_FILES['floorimg']['name'];
            $fileSize = $_FILES["floorimg"]["size"]/1024;
            $fileType = $_FILES["floorimg"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/properties",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('floorimg')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {
           
              $file_data = $this->upload->data();

            // If the upload is successful, get the file name
            $floorimg_url = $file_data['file_name'];
          }
        } else {
            // If 'floorimg' is not uploaded, set it to an empty string or handle accordingly
            $floorimg_url = '';
        }

        // Create an array with the property data
        $property_data = array(
            'propertyName' => $this->input->post('propertyName'),
            'propertyStatus' => $this->input->post('propertyStatus'),
            'propertyType' => $this->input->post('propertyType'),
            'propertySqft' => $this->input->post('propertySqft'),
            'rooms' => $this->input->post('rooms'),
            'bathroom' => $this->input->post('bathroom'),
            'propertyPrice' => $this->input->post('propertyPrice'),
            'thumnail' => $thumnail_img_url,
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode'),
            'description' => $this->input->post('description'),
            'floorimg' => $floorimg_url,
            'location' => $this->input->post('location'),
            'video' => $this->input->post('video')
        );

        $table = 'properties'; // Adjust the table name as needed

        // Perform the database insert
        $result = $this->Common_model->insert($property_data, $table);

        if ($result) {
            // Success: Property inserted
            echo json_encode(array('status' => 'success', 'message' => 'Property Added successfully'));
        } else {
            // Error: Property not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Property Not Added'));
        }
    }      
     public function update_properties() {
        // Check if the 'thumnail' file is uploaded
        if ($_FILES['thumnail']['name']) {
            $thumnail_file_name = $_FILES['thumnail']['name'];
            // Handle file upload and validation here similar to your previous code
            $file_name = $_FILES['thumnail']['name'];
            $fileSize = $_FILES["thumnail"]["size"]/1024;
            $fileType = $_FILES["thumnail"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/properties/thumnail",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('thumnail')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {

            $file_data = $this->upload->data();
            //$img_url = $file_data['file_name'];     
            // If the upload is successful, get the file name
            $thumnail_img_url = $file_data['file_name'];
          }
        } else {
            // Handle the case where 'thumnail' file is required but not provided
            // echo json_encode(array('status' => 'error', 'message' => 'Thumbnail image is required.'));
            // return;
            $thumnail_img_url = '';
        }

        // Check if the 'floorimg' file is uploaded (optional)
        if ($_FILES['floorimg']['name']) {
            $floorimg_file_name = $_FILES['floorimg']['name'];
            // Handle file upload and validation for 'floorimg' here (similar to 'thumnail')
             $file_name = $_FILES['floorimg']['name'];
            $fileSize = $_FILES["floorimg"]["size"]/1024;
            $fileType = $_FILES["floorimg"]["type"];
            $new_file_name='';
            $new_file_name .= $file_name;

            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./assets/uploads/properties",
                'allowed_types' => "gif|jpg|png|jpeg|ico",
                'overwrite' => TRUE,
                'max_size' => "50720000"
            );
            //create directory
              if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);                
            if (!$this->upload->do_upload('floorimg')) {
                echo $this->upload->display_errors();
                #redirect("notice/All_notice");
            }else {
           
              $file_data = $this->upload->data();

            // If the upload is successful, get the file name
            $floorimg_url = $file_data['file_name'];
          }
        } else {
            // If 'floorimg' is not uploaded, set it to an empty string or handle accordingly
            $floorimg_url = '';
        }

        // Create an array with the property data
        $property_data = array(
            'propertyName' => $this->input->post('propertyName'),
            'propertyStatus' => $this->input->post('propertyStatus'),
            'propertyType' => $this->input->post('propertyType'),
            'propertySqft' => $this->input->post('propertySqft'),
            'rooms' => $this->input->post('rooms'),
            'bathroom' => $this->input->post('bathroom'),
            'propertyPrice' => $this->input->post('propertyPrice'),
           // 'thumnail' => $thumnail_img_url,
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'pincode' => $this->input->post('pincode'),
            'description' => $this->input->post('description'),
            //'floorimg' => $floorimg_url,
            'location' => $this->input->post('location'),
            'video' => $this->input->post('video')
        );
          if ($thumnail_img_url) {
                    $property_data["thumnail"] = $thumnail_img_url;
          }
           if ($floorimg_url) {
                    $property_data["floorimg"] = $floorimg_url;
          }

        $table = 'properties'; // Adjust the table name as needed
                               
        $id = $this->input->post('id');
        $result = $this->Common_model->update($property_data,$table,$id );

        if ($result) {
            // Success: Property inserted
            echo json_encode(array('status' => 'success', 'message' => 'Property Updated successfully'));
        } else {
            // Error: Property not inserted
            echo json_encode(array('status' => 'error', 'message' => 'Property Not Updated'));
        }
    }
       public function DeleteProperties() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'properties';
        $data = array('isActive'=>'0');
        $result = $this->Common_model->update($data,$table,$id );
       // $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Testimonial deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Testimonial deletion failed'));
        }
    }

    //---------------------property images -------------------

   
    // -------------------------
// public function add_property_images()
// {
//     if ($this->session->userdata('user_login_access') != false) {
//         $property_id = $this->input->post('property_id');

//         // Process multiple images
//         foreach ($_FILES['property_img']['name'] as $index => $image_name) {
//             // Handle file uploads for each image
//             if ($_FILES['property_img']['error'][$index] == UPLOAD_ERR_OK) {
//                 $upload_path = './assets/uploads/properties/';
//                 $file_path = '/assets/uploads/properties/';
//                 $tmp_name = $_FILES['property_img']['tmp_name'][$index];
//                 $destination = './assets/uploads/properties/' . $image_name;

//                 // Move the uploaded image to the destination
//                 move_uploaded_file($tmp_name, $destination);

//                 $insert_data = array(
//                     'property_id' => $property_id,
//                     'image_path' => $image_name,
//                    // 'file_path' => $file_path . $image_name
//                 );

//                 // Insert data into the appropriate table
//                 $result = $this->db->insert($insert_data,'property_images');
//             }
//         }

//         // Check the result and respond accordingly
//         if ($result) {
//             echo json_encode(array('status' => 'success', 'message' => "Images Added Successfully"));
//         } else {
//             echo json_encode(array('status' => 'error', 'message' => "Failed to add images"));
//         }
//     } else {
//         redirect(base_url(), 'refresh');
//     }
// }
    //------------new
    //------------Multiple image upload
    public function add_property_images()
{
    if ($this->session->userdata('user_login_access') != false) {
        $property_id = $this->input->post('property_id');
        //print_r($_FILES['property_img']['name'] );die();
        // Initialize an empty array to store the file paths
        $file_paths = array();

        // Process multiple images
        foreach ($_FILES['property_img']['name'] as $index => $image_name) {
            // Handle file uploads for each image
            if ($_FILES['property_img']['error'][$index] == UPLOAD_ERR_OK) {
                $upload_path = './assets/uploads/properties/property_images';
                $file_path = '/assets/uploads/properties/property_images';
                $tmp_name = $_FILES['property_img']['tmp_name'][$index];
                $destination = './assets/uploads/properties/property_images/' . $image_name;

                // Move the uploaded image to the destination
                move_uploaded_file($tmp_name, $destination);

                // Add the file path to the array
                $file_paths[] =  $image_name;
              //  $file_paths[] = $file_path . $image_name;
            }
        }

        // Insert data into the appropriate table
        foreach ($file_paths as $file_path) {
            $insert_data = array(
                'property_id' => $property_id,
                'image_path' => $file_path
            );
            
            $result = $this->db->insert('property_images', $insert_data);
        }

        // Check the result and respond accordingly
        if ($result) {
            echo json_encode(array('status' => 'success', 'message' => "Images Added Successfully"));
        } else {
            echo json_encode(array('status' => 'error', 'message' => "Failed to add images"));
        }
    } else {
        redirect(base_url(), 'refresh');
    }
   }
    public function Get_properties_images(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->get('id');
      
        $getdata = $this->Common_model->Get_properties_images($id);
        if($getdata){
        $i = 1;
        foreach($getdata as $value){
        echo' <tr>
            <td scope="row">'.$i.'</td>
            <td><img src="'.base_url().'assets/uploads/properties/property_images/'.$value->image_path.'" alt="" class="img-fluid mt-2 text-center" style="width: 100px;height:50px"></td>
       
            <td><a title="Delete" class=" deleteImage" data-id="'.$value->id.'">   <i class="bi bi-trash-fill"></i></a></td>
        </tr>';

        $i++; }
        }
        }
       }
    public function deleteImage() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'property_images';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Image deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Image deletion failed'));
        }
    }

             //------------------------------Condtions -------------------------------
    // Condtions
      public function Get_properties_Conditions(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->get('id');
      
        $getdata = $this->Common_model->Get_properties_Conditions($id);
        if($getdata){
        $i = 1;
        foreach($getdata as $value){
        echo' <tr>
            <td scope="row">'.$i.'</td>
            <td>'.$value->conditions.'</td>
       
            <td><a title="Delete" class=" deletecondition" data-id="'.$value->id.'">   <i class="bi bi-trash-fill"></i></a></td>
        </tr>';

        $i++; }
        }
        }
       }
       //Add_conditions

        public function Add_conditions()
        {
        if($this->session->userdata('user_login_access') != False) {
        // $emp_id = $this->input->post('emp_id');
        // $salaryid = $this->input->post('salaryid');
         $property_id = $this->input->post('property_id');
         $conditions = $this->input->post('conditions');

        // Store processed allowances
         $processedAllowances = [];
         $duplicateAllowances = [];


        //multiple inputs
        foreach($conditions as $index => $value)
        {
        $condition = $value;
         // Check if the condition is empty or only contains whitespace
            if (empty(trim($condition))) {
                continue; // Skip empty condition
            }

        // Check if the allowance has already been processed
            if (in_array($condition, $processedAllowances)) {
                continue; // Skip duplicate entry
            }
        // Check if the allowance already exists in the database
        $existingAllowance = $this->Common_model->get_condtion_by_name($condition,$property_id);

        if (!$existingAllowance) {

        $data = array(
        'property_id' => $property_id,
  
        'conditions' => $condition,
       

        );

        //print_r($data);
     //   $success = $this->payroll_model->Add_Allowance($data);
          $table = 'property_conditions'; // Adjust the table name as needed

        // Perform the database insert
        $success = $this->Common_model->insert($data, $table);

          if ($success) {
            // Add the processed allowance to the array
            $processedAllowances[] = $condition;
         }
        }else{
             // Allowance already exists, add it to the duplicate allowances array
          $duplicateAllowances[] = $condition;
        }
        }
     
          if (!empty($duplicateAllowances)) {
                    // $response['status'] = 'error';
                    // $response['message'] = 'Duplicate deductions found: ' . implode(', ', $duplicateDeductions);
                    echo json_encode(array('status'=>'error','message'=>'Duplicate conditions  found: ' . implode(', ', $duplicateAllowances)));
                }else{
                    echo json_encode(array('status'=>'success','message'=>'Conditions Added Successfully '));
                }

        }
        }
         public function deletecondition() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'property_conditions';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Conditions deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Conditions deletion failed'));
        }
    }

    //------------------------------Features (features) -------------------------------
      public function Get_properties_features(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->get('id');
      
        $getdata = $this->Common_model->Get_properties_features($id);
        if($getdata){
        $i = 1;
        foreach($getdata as $value){
        echo' <tr>
            <td scope="row">'.$i.'</td>
            <td>'.$value->features.'</td>
       
            <td><a title="Delete" class=" deletefeatures" data-id="'.$value->id.'">   <i class="bi bi-trash-fill"></i></a></td>
        </tr>';

        $i++; }
        }
        }
       }
       //Add_features

        public function Add_features()
        {
        if($this->session->userdata('user_login_access') != False) {
        // $emp_id = $this->input->post('emp_id');
        // $salaryid = $this->input->post('salaryid');
         $property_id = $this->input->post('property_id');
         $features = $this->input->post('features');

        // Store processed allowances
         $processedAllowances = [];
         $duplicateAllowances = [];


        //multiple inputs
        foreach($features as $index => $value)
        {
        $condition = $value;
         // Check if the condition is empty or only contains whitespace
            if (empty(trim($condition))) {
                continue; // Skip empty condition
            }
            
        // Check if the allowance has already been processed
            if (in_array($condition, $processedAllowances)) {
                continue; // Skip duplicate entry
            }
        // Check if the allowance already exists in the database
        $existingAllowance = $this->Common_model->get_features_by_name($condition,$property_id);

        if (!$existingAllowance) {

        $data = array(
        'property_id' => $property_id,
  
        'features' => $condition,
       

        );

        //print_r($data);
     //   $success = $this->payroll_model->Add_Allowance($data);
          $table = 'property_features'; // Adjust the table name as needed

        // Perform the database insert
        $success = $this->Common_model->insert($data, $table);

          if ($success) {
            // Add the processed allowance to the array
            $processedAllowances[] = $condition;
         }
        }else{
             // Allowance already exists, add it to the duplicate allowances array
          $duplicateAllowances[] = $condition;
        }
        }
     
          if (!empty($duplicateAllowances)) {
                    // $response['status'] = 'error';
                    // $response['message'] = 'Duplicate deductions found: ' . implode(', ', $duplicateDeductions);
                    echo json_encode(array('status'=>'error','message'=>'Duplicate Features  found: ' . implode(', ', $duplicateAllowances)));
                }else{
                    echo json_encode(array('status'=>'success','message'=>'Features Added Successfully '));
                }

        }
        }
         public function deletefeatures() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'property_features';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Features deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Features deletion failed'));
        }
    }
    //------------------------------Details (details)  property_details-------------------------------
      public function Get_properties_details(){
        if($this->session->userdata('user_login_access') != False) {
        $id = $this->input->get('id');
      
        $getdata = $this->Common_model->Get_properties_details($id);
        if($getdata){
        $i = 1;
        foreach($getdata as $value){
        echo' <tr>
            <td scope="row">'.$i.'</td>
            <td>'.$value->details.'</td>
       
            <td><a title="Delete" class=" deletedetails" data-id="'.$value->id.'">   <i class="bi bi-trash-fill"></i></a></td>
        </tr>';

        $i++; }
        }
        }
       }
       //Add_details

        public function Add_details()
        {
        if($this->session->userdata('user_login_access') != False) {
        // $emp_id = $this->input->post('emp_id');
        // $salaryid = $this->input->post('salaryid');
         $property_id = $this->input->post('property_id');
         $details = $this->input->post('details');

        // Store processed allowances
         $processedAllowances = [];
         $duplicateAllowances = [];


        //multiple inputs
        foreach($details as $index => $value)
        {
        $condition = $value;
         // Check if the condition is empty or only contains whitespace
            if (empty(trim($condition))) {
                continue; // Skip empty condition
            }
            
        // Check if the allowance has already been processed
            if (in_array($condition, $processedAllowances)) {
                continue; // Skip duplicate entry
            }
        // Check if the allowance already exists in the database
        $existingAllowance = $this->Common_model->get_details_by_name($condition,$property_id);

        if (!$existingAllowance) {

        $data = array(
        'property_id' => $property_id,
  
        'details' => $condition,
       

        );

        //print_r($data);
     //   $success = $this->payroll_model->Add_Allowance($data);
          $table = 'property_details'; // Adjust the table name as needed

        // Perform the database insert
        $success = $this->Common_model->insert($data, $table);

          if ($success) {
            // Add the processed allowance to the array
            $processedAllowances[] = $condition;
         }
        }else{
             // Allowance already exists, add it to the duplicate allowances array
          $duplicateAllowances[] = $condition;
        }
        }
     
          if (!empty($duplicateAllowances)) {
                    // $response['status'] = 'error';
                    // $response['message'] = 'Duplicate deductions found: ' . implode(', ', $duplicateDeductions);
                    echo json_encode(array('status'=>'error','message'=>'Duplicate Details  found: ' . implode(', ', $duplicateAllowances)));
                }else{
                    echo json_encode(array('status'=>'success','message'=>'Details Added Successfully '));
                }

        }
        }
         public function deletedetails() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
          $table = 'property_details';
        $result = $this->Common_model->delete($id,$table);

        if ($result) {
        
            echo json_encode(array('status' => 'success','message' => 'Details deleted successfully'));
        } else {
         
            echo json_encode(array('status' => 'error', 'message' => 'Details deletion failed'));
        }
    }
}

