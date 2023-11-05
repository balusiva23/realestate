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
		$this->load->view('Frontend/properties',$this->data);
	}

	// New
		function fetch_data()
	{
		sleep(2);
		// $minimum_price = $this->input->post('minimum_price');
		// $maximum_price = $this->input->post('maximum_price');
		// $brand = $this->input->post('brand');
		// $ram = $this->input->post('ram');
		// $storage = $this->input->post('storage');
		$sale = $this->input->post('sale');
		$rent = $this->input->post('rent');
		$lease = $this->input->post('lease');
		$city = $this->input->post('city');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		//$config["total_rows"] = $this->Property_model->count_all($minimum_price, $maximum_price, $brand, $ram, $storage);
		$config["total_rows"] = $this->Property_model->count_all($sale, $rent,$lease,$city);
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
			'product_list'			=>	$this->Property_model->fetch_data($config["per_page"], $start,$sale, $rent,$lease,$city)
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

		$this->load->view('Frontend/single-property',$this->data);
	}
	

	 
}
