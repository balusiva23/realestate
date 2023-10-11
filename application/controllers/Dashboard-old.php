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
        	$this->load->model('Product_model');
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

	     public function index()
	  	{
		    $this->checkLogin(); // Add this line to check login
		    $this->load->view('Backend/dashboard');
		}
       public function Settings()
        {
            $this->checkLogin(); // Add this line to check login
          
            $this->load->view('Backend/settings');
        }


	    public function Products()
		{
		    $this->checkLogin(); // Add this line to check login
		  	$data['members'] = $this->Product_model->getAllMembers();
		    $this->load->view('Backend/view-products',$data);
		} 
        public function Ingredients()
        {
            $this->checkLogin(); // Add this line to check login
                $data['rid'] = $this->input->get('I');
                $id = $this->input->get('I');
            $data['members'] = $this->Product_model->getItemsByID($id);
          
            $this->load->view('Backend/incredients',$data);
        }

		 public function add_product() {
        $data = array(
            'name' => $this->input->post('name'),
            // 'brand' => $this->input->post('brand'),
            // 'quantity' => $this->input->post('quantity'),
            // 'price' => $this->input->post('price')
        );

        $result = $this->Product_model->insert_product($data);

        if ($result) {
            // Success: Product inserted
			echo json_encode(array('status' => 'success', 'message' => 'Product Added successfully'));
        } else {
            // Error: Product not inserted
        	echo json_encode(array('status' => 'error', 'message' => 'Product Not Added'));
        }
    }
	public function edit_product() {
		$id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            // 'brand' => $this->input->post('brand'),
            // 'quantity' => $this->input->post('quantity'),
            // 'price' => $this->input->post('price')
        );

        $result = $this->Product_model->update_product($id, $data);

        if ($result) {
            // Success: Product updated
             // Success: Product inserted
			echo json_encode(array('status' => 'success', 'message' => 'Product Updated successfully'));
        } else {
            // Error: Product not updated
			echo json_encode(array('status' => 'error', 'message' => 'Product Not Updated'));
        }
    }
	public function getProductByID() {
		$id = $this->input->get('id');
        // Call the model method to retrieve product details by ID
        $product = $this->Product_model->getProductByID($id);

        // Check if the product exists
        if ($product) {
            // Send the product details as JSON response
            echo json_encode($product);
        } else {
            // Product not found
            echo json_encode(array('error' => 'Product not found'));
        }
    }

	public function deleteProduct() {
		$id = $this->input->post('id');
        // Call the model method to delete the product by ID
        $result = $this->Product_model->deleteProductByID($id);

        if ($result) {
            // Product deleted successfully
            // You can redirect to a success page or return a success response here
            echo json_encode(array('status' => 'success','message' => 'Product deleted successfully'));
        } else {
            // Product not found or deletion failed
            // You can redirect to an error page or return an error response here
            echo json_encode(array('status' => 'error', 'message' => 'Product deletion failed'));
        }
    }
   
   public function addIngredients() {
        // Get data from the AJAX request
        $ingredients = $this->input->post('ingredients');
        $recipe_id = $this->input->post('recipe_id');

        // Loop through the ingredients and insert them into the database
        foreach ($ingredients as $ingredient) {
            $data = array(
                'name' => $ingredient['name'],
                'quantity' => $ingredient['quantity'],
                'method' => $ingredient['method'],
                'recipe_id' => $recipe_id
            );

            $this->Product_model->insertIngredient($data); // Call a method in your model to insert the ingredient
        }

        // You can return a success message or JSON response here
        echo json_encode(array('message' => 'Ingredients added successfully'));
    }
    
    public function deleteItems() {
        $id = $this->input->post('id');
        // Call the model method to delete the product by ID
        $result = $this->Product_model->deleteItemByID($id);

        if ($result) {
            // Product deleted successfully
            // You can redirect to a success page or return a success response here
            echo json_encode(array('status' => 'success','message' => 'Ingredients deleted successfully'));
        } else {
            // Product not found or deletion failed
            // You can redirect to an error page or return an error response here
            echo json_encode(array('status' => 'error', 'message' => 'Ingredients deletion failed'));
        }
    }
}