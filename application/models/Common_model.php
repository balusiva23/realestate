<?php
class Common_model extends CI_Model {
   

        public function getSettings() {
            $query = $this->db->get('tbl_settings', 1); // Limit the query to one row
            if ($query->num_rows() > 0) {
                return $query->row(); // Return the first row as an object
            } else {
                return null; // No data found
            }
        }

        public function insertData($data) {
         return $this->db->insert('tbl_settings', $data);

    
        }

        public function updateData($data) {
         $this->db->limit(1); // Limit the update to only the first row
         return $this->db->update('tbl_settings', $data);

        }

         public function updateDatabyId($data, $id) {
            $this->db->where('id', $id);
          return   $this->db->update('tbl_settings', $data);

        }
       
       public function dataExists() {
            $query = $this->db->get('tbl_settings');
            return ($query->num_rows() > 0);
       }
      //-----------------common
       //insert common
      public function insert($data,$table) {
        return $this->db->insert($table, $data);
      }
       public function update($data,$table, $id) {
            $this->db->where('id', $id);
          return   $this->db->update($table, $data);

       }
        public function delete($id,$table) {
     
        $this->db->where('id', $id);
        return $this->db->delete($table);

       }
       //-----------------common
       
      //home banner

        public function getHomeBanner()
        {
         
             $this->db->order_by('position', 'asc');
              $this->db->where('isActive', '1');
            $query = $this->db->get('tbl_home_banner');
            return $query->result();
        }
        
        public function getBannerByID($id) {
        // Retrieve product details by ID from the "products" table
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_home_banner');

        // Check if a product with the given ID exists
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }    
    //Testimonial
    public function getTestimonialByID($id) {
        // Retrieve product details by ID from the "products" table
        $this->db->where('id', $id);
        $query = $this->db->get('testimonials');

        // Check if a product with the given ID exists
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    public function getTestimonial()
    {
     
         $this->db->order_by('position', 'asc');
          $this->db->where('isActive', '1');
        $query = $this->db->get('testimonials');
        return $query->result();
    }    
    //Brand Logo
    public function getLogoByID($id) {
        // Retrieve product details by ID from the "products" table
        $this->db->where('id', $id);
        $query = $this->db->get('brands');

        // Check if a product with the given ID exists
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    public function getLogo()
    {
     
         $this->db->order_by('position', 'asc');
          $this->db->where('isActive', '1');
        $query = $this->db->get('brands');
        return $query->result();
    }

      public function getDataByID($id,$table) {
    
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query->row();

    }
    //Properties
     public function getProperties()
    {
     
         $this->db->order_by('id', 'asc');
          $this->db->where('isActive', '1');
        $query = $this->db->get('properties');
        return $query->result();
    } 
     public function getPropertiesbyid($id)
    {

     $this->db->where('id', $id);
        $query = $this->db->get('properties');
        return $query->row();
    }
       public function Get_properties_images($id)
    {
     
        $this->db->order_by('id', 'asc');
        $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $query = $this->db->get('property_images');
        return $query->result();
    }    
     public function Single_properties_images($id)
    {
     
        $this->db->order_by('id', 'asc');
        $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $this->db->limit(5);
        $query = $this->db->get('property_images');
        return $query->result();
    }   
      
     public function Get_properties_Conditions($id)
    {
     
         $this->db->order_by('id', 'asc');
          $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $query = $this->db->get('property_conditions');
        return $query->result();
    } 
    //check condtion
    public function get_condtion_by_name($conditions,$property_id)
    {
    // Assuming you have a database table named 'allowances'
    $query = $this->db->get_where('property_conditions', array('conditions' => $conditions,'property_id'=>$property_id));

    // Check if the query returned any result
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
    }   
     public function Get_properties_features($id)
    {
     
         $this->db->order_by('id', 'asc');
          $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $query = $this->db->get('property_features');
        return $query->result();
    } 
    //check condtion
    public function get_features_by_name($features,$property_id)
    {
    // Assuming you have a database table named 'allowances'
    $query = $this->db->get_where('property_features', array('features' => $features,'property_id'=>$property_id));

    // Check if the query returned any result
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
    } 
    ///-----details  
      public function Get_properties_details($id)
    {
     
         $this->db->order_by('id', 'asc');
          $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $query = $this->db->get('property_details');
        return $query->result();
    } 
    //check condtion
    public function get_details_by_name($details,$property_id)
    {
    // Assuming you have a database table named 'allowances'
    $query = $this->db->get_where('property_details', array('details' => $details,'property_id'=>$property_id));

    // Check if the query returned any result
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
    }
  //cities
        public function getcities()
    {
     
        $this->db->order_by('id', 'asc');
        $this->db->where('isActive', '1');
        $query = $this->db->get('cities');
        return $query->result();
    } 
    //cities
        public function getfloors($id)
    {
     
        $this->db->order_by('id', 'asc');
       $this->db->where(array('isActive'=> '1','property_id'=>$id));
        $query = $this->db->get('floor_images');
        return $query->result();
    }

}
