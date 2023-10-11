<?php

	class Login_model extends CI_Model{


	function __consturct(){
		parent::__construct();
	}

	public function getUserForLogin($credential){		

    	return $this->db->get_where('users', $credential);
	}
	
	public function getdata(){
			
		$query =$this->db->get('users');
		$result=$query->result();
		return $result;
	}

	//**exists employee email check**//
     public function Does_email_exists($email) {
		$user = $this->db->dbprefix('employee');
        $sql = "SELECT `em_email` FROM $user
		WHERE `em_email`='$email' AND `status` = 'ACTIVE'";
		$result=$this->db->query($sql);
		    if ($result->row()) {
		        return $result->row();
		    } else {
		        return false;
		    }
      }


	
	//**exists employee email check**//
    public function Does_Key_exists($reset_key) {
		$user = $this->db->dbprefix('employee');
        $sql = "SELECT `forgotten_code` FROM $user
		WHERE `forgotten_code`='$reset_key'";
		$result=$this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
	

	public function getUserByUsername($username) {
        // Perform a database query to retrieve the user based on their username
        $this->db->where('email', $username);
        $query = $this->db->get('users'); // 'users' is the name of your users table

        // Check if a user with the provided username exists
        if ($query->num_rows() > 0) {
            // Return the user's data as an object
            return $query->row();
        } else {
            // If no user is found, return false
            return false;
        }
    }
    //signup
      public function save_member($data)
    {
        return $this->db->insert('users', $data); // Assuming 'users' is the name of your table
    }

    public function is_email_duplicate($email)
    {
        $this->db->where(array('email'=> $email,'isActive'=>1));
        $query = $this->db->get('users');

        return $query->num_rows() > 0;
    }
    public function is_number_duplicate($number)
    {
        //$this->db->where('number', $number);
        $this->db->where(array('number'=> $number,'isActive'=>1));
        $query = $this->db->get('users');
        return $query->num_rows() > 0;
    }
      public function getAdminDetails($adminId) {
        $this->db->select('id, name,role,number, email,profile'); // Specify the fields you want to retrieve excluding password
        $this->db->from('users');
        $this->db->where(array('id'=> $adminId,'isActive'=>1));
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
   

}
?>