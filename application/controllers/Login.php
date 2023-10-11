<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        // $this->load->model('dashboard_model');
        //  $this->load->model('settings_model');
         $this->load->helper('cookie');
  
    }
    
	public function index()
	{
		#Redirect to Admin dashboard after authentication
        if ($this->session->userdata('user_login_access') == 1)
            redirect(base_url() . 'dashboard');
            $data=array();
            #$data['settingsvalue'] = $this->dashboard_model->GetSettingsValue();
			$this->load->view('login');
	}
		public function Signup()
	{
       
		$this->load->view('register');
	}


		public function Login_Auth() {
	    // Get the login credentials from the form
	    $username = $this->input->post('email');
	    $password = $this->input->post('password');
	    $remember = $this->input->post('remember'); // Assuming remember checkbox has name "remember"

	    // Check if the remember me checkbox is checked
	    $rememberMe = $remember ? true : false;

	    // Authenticate the user using the submitted credentials
	    $user = $this->determineUser($username, $password);

	    if ($user) {
	        // User authentication succeeded
	        $this->session->set_userdata('user_login_access', '1');
	        $this->session->set_userdata('user_login_id', $user->id);
	        $this->session->set_userdata('name', $user->name);
	        $this->session->set_userdata('email', $user->email);
	        $this->session->set_userdata('url', 'dashboard/'); // Customize the dashboard URL

	        // Set cookies if remember me is checked
	        if ($rememberMe) {
	            $cookie_username = array(
	                'name' => 'username',
	                'value' => $username,
	                'expire' => 604800, // 1 week
	                'domain' => $_SERVER['HTTP_HOST'],
	                'secure' => false
	            );
	            $cookie_pass = array(
	                'name' => 'password',
	                'value' => base64_encode($password),
	                'expire' => 604800, // 1 week
	                'domain' => $_SERVER['HTTP_HOST'],
	                'secure' => false
	            );

	            $this->input->set_cookie($cookie_username);
	            $this->input->set_cookie($cookie_pass);
	        }

	        echo json_encode(array("status" => "success", "url" => 'dashboard/')); // Customize the success URL
	    } else {
	        // User authentication failed
	        echo json_encode(array("status" => "error", "url" => 'login', "message" => "Please check your login details"));
	    }
	}

	private function determineUser($username, $password) {
	    // Authenticate the user's credentials against the database

	    // Check if the user exists and the password matches
	    $user = $this->login_model->getUserByUsername($username);
	    if ($user && password_verify($password, $user->password)) {
	        return $user;
	    }

	    // If no user is determined, return false
	    return false;
	}

    /*Logout method*/
    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'), 'refresh');
    }


    	public function saveuser()
    {
        $name = $this->input->post('uname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $number = $this->input->post('number');
        $code = $this->input->post('code');

        // Perform form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('uname', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Form validation failed
            $response = array(
                'status' => 'valid',
                'message' => validation_errors()
            );
        } else {
            // Form validation passed


            if ($this->login_model->is_email_duplicate($email) && $this->login_model->is_number_duplicate($number)) {
            $response = array(
                'status' => 'error',
                'message' => 'Email address and number already exist'
            );
           // echo json_encode($response);
           } elseif ($this->login_model->is_email_duplicate($email)) {
              
                  $response = array(
                   'status' => 'error',
                     'message' => 'Email address already exists'
               );
             } elseif ($this->login_model->is_number_duplicate($number)) {
             
                  $response = array(
                   'status' => 'error',
                   'message' => 'Number already exists'
                );
            } else {
             
            // Encrypt the password
            $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

            // Save the member details in the database
            $member_data = array(
                'name' => $name,
                'email' => $email,
                'password' => $encrypted_password,
              
                'number' =>$number,
             
            );

            if ($this->login_model->save_member($member_data)) {

                //$this->send_mail($name,$email,$number);

                // Member saved successfully
                $response = array(
                    'status' => 'success',
                    'message' => 'Registration successful'
                );
            } else {
                // Error saving member
                $response = array(
                    'status' => 'error',
                    'message' => 'Error saving member'
                );
            }
        }
       }

        echo json_encode($response);
    }

	


}