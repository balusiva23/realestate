<?php 

class Property_model extends CI_Model {

	//------------------------------fornt end properties ------------------------------

      public function getProperties($offset, $limit) {
        // Fetch properties from the database using the offset and limit
        $this->db->limit($limit, $offset);
        $query = $this->db->get('properties'); // Replace 'properties' with your actual table name

        // Check if there are results
        if ($query->num_rows() > 0) {
            return $query->result(); // Return an array of properties
        } else {
            return array(); // Return an empty array if no results
        }
    }

//     public function getProperties($filter_data, $offset, $limit) {
//     $this->db->select('*');
//     $this->db->from('properties'); // Replace with your actual table name

//     if (!empty($filter_data['propertyStatus'])) {
//         $this->db->where('propertyStatus', $filter_data['propertyStatus']);
//     }

//     // Add more filter conditions here...

//     $this->db->limit($limit, $offset);
//     $query = $this->db->get();

//     return $query->result();
// }

    // New -----------------------------

    function make_query($sale, $rent,$lease,$city)
    {
        $query = "
        SELECT * FROM properties 
        WHERE isActive = '1' 
        ";


        //  if(isset($sale))
        // {
        //     $ram_filter = implode("','", $sale);
        //     $query .= "
        //      AND propertyStatus IN('".$ram_filter."')
        //     ";
        // }
        // if(isset($rent))
        // {
        //     $storage_filter = implode("','", $rent);
        //     $query .= "
        //      AND propertyStatus IN('".$storage_filter."')
        //     ";
        // }
        if (isset($sale) || isset($rent) || isset($lease) || isset($city)) {
            $conditions = [];

            if (isset($sale)) {
                $ram_filter = implode("','", $sale);
                $conditions[] = "propertyStatus IN ('" . $ram_filter . "')";
            }

            if (isset($rent)) {
                $storage_filter = implode("','", $rent);
                $conditions[] = "propertyStatus IN ('" . $storage_filter . "')";
            } 
            if (isset($lease)) {
                $storage_filter = implode("','", $lease);
                $conditions[] = "propertyStatus IN ('" . $storage_filter . "')";
            }  

            if (isset($city)) {
                $storage_filter = implode("','", $city);
                $conditions[] = "city IN ('" . $storage_filter . "')";
            }

            $query .= " AND (" . implode(" OR ", $conditions) . ")";
         }
        //   if(isset($city))
        // {
        //     $storage_filter = implode("','", $city);
        //     $query .= "
        //      AND city IN('".$city."')
        //     ";
        // }
        return $query;
    }

  //  function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $ram, $storage)
    function fetch_data($limit, $start,$sale, $rent,$lease,$city)
    {
        //$query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);
        $query = $this->make_query($sale, $rent,$lease,$city);

        $query .= ' LIMIT '.$start.', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        //print_r($query);
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $property)
            {
                if($property->city){

                     $city_data = $this->getcitiesbyid($property->city);
                }else{
                    $city_data  = '';
                }
               
            // print_r($city_data->city);
                $output .= '
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="'.base_url().'SingleProperty?I='.$property->id.'" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">';
                                    
                                   if($property->propertyStatus == "1") {  $output .=  "For Sale"; }else if($property->propertyStatus == "2")  {  $output .=  "For Rent"; } else if($property->propertyStatus == "3")  {  $output .=  "For Lease"; } 

                                     $output .= '</span>
                                </div>
                                <div class="price-ratings-box">
                                    <h4 class="price">';


                                       if($property->propertyStatus == "1") { 
                                        $output .= ' '.$property->propertyPrice.'<span>/mo</span>';
                                     }else {  
                                      $output .= ''.$property->propertyPrice.'';
                                    } ?>
                                  <?php  

                                  $output .= '   </h4>
                                </div>
                                <div class="property-overflow">
                                    <img class="d-block w-100" src="'.base_url().'assets/uploads/properties/thumnail/'.$property->thumnail.'" alt="properties" style="max-width:416px;height:277px">
                                 
                                </div>
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="'.base_url().'SingleProperty?I='.$property->id.'">'.$property->propertyName.'</a>
                            </h1>
                            <div class="location">
                                <a href="'.base_url().'SingleProperty?I='.$property->id.'">
                                    <i class="fa fa-map-marker"></i>'.$property->address.' , '.$city_data->city.'
                                </a>
                            </div>
               
                        </div>
                        <div class="footer clearfix">
                            <div class="pull-left agent">

                            </div>
                            <div class="pull-right days">
                                <p><a href="'.base_url().'SingleProperty?I='.$property->id.'"> Read More </a></p>
                            </div>
                        </div>
                    </div>
                </div> 
                '; 
          
            }
            //    <img class="d-block w-100" src="'.base_url().'assets/web/img/p1.jpg" alt="properties">
        }
        else
        {
            $output = '<h3>No Data Found</h3>';
        }
        return $output;
    }

   // function count_all($minimum_price, $maximum_price, $brand, $ram, $storage)
    function count_all($sale, $rent,$lease,$city)
    {
        //$query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);
        $query = $this->make_query($sale, $rent,$lease,$city);
        $data = $this->db->query($query);
        return $data->num_rows();
    }

     public function getcitiesbyid($id)
    {
     
       // $this->db->order_by('id', 'asc');
          $this->db->where(array('isActive'=> '1','id'=>$id));
        $query = $this->db->get('cities');
        return $query->row();
    }
}
 ?>