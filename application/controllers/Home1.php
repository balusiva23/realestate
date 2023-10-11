<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

public function Properties($page = 1)
{
    // Load the pagination library
    $this->load->library('pagination');

    // Pagination configuration
    $config['base_url'] = base_url('Properties');
    $config['total_rows'] = $this->db->count_all('properties'); // Replace 'properties' with your actual table name
    $config['per_page'] = 4; // Number of properties per page
    $config['uri_segment'] = 2; // URI segment that contains the page number
    $config['use_page_numbers'] = TRUE;   
    /*
      Bootstrap styling for pagination links
    */
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

    $this->pagination->initialize($config);

    // Get the page number from the URI segment
    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;

    // Load your Property_model
    $this->load->model('Property_model');
   // $page = max(1, $page); // Ensure page is at least 1
    // Calculate the offset based on the page number and per_page
    $offset = ($page - 1) * $config['per_page'];
 
    // Get property data for the current page
    $this->data['properties'] = $this->Property_model->getProperties($offset, $config['per_page']);

    // Generate pagination links
    $this->data['links'] = $this->pagination->create_links();

    // Load the view with the correct data
    $this->load->view('Frontend/properties', $this->data);
}
	// 	public function Properties()
	// {
	// 	$this->load->view('Frontend/properties',$this->data);
	// }
	public function SingleProperty()
	{
		$this->load->view('Frontend/single-property',$this->data);
	}
	
	

	 
}
