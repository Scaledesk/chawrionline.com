<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Mdl_admin extends CI_Model
{


public function showProducts(){



$query=$this->db->query("SELECT * FROM `chawri_products_orders` LEFT JOIN `chawri_products` ON `chawri_products_orders`.`chawri_products_orders_products_id` = `chawri_products`.`chawri_products_id` LEFT JOIN `chawri_users` ON `chawri_products_orders`.`chawri_products_orders_buyer_id` = `chawri_users`.`chawri_users_id`LEFT JOIN `chawri_sellers` ON `chawri_sellers`.`chawri_sellers_id` = `chawri_products`.`chawri_sellers_id` WHERE `chawri_products_orders_status` = 'admin_approvel_pending'")->result_array();

return $query;


}



public function approval($id){




  $data= array('chawri_products_orders_status' =>'admin_approvel_done' );
  $this->db->WHERE('chawri_products_orders_id',$id);
  $this->db->update('chawri_products_orders',$data);

if($this->db->affected_rows()){
 return true;
}
else{
 return false;
}

}


public function getSellers(){

	return $this->db->get('chawri_sellers')->result_array();

}
public function getBuyer(){

	return $this->db->get('chawri_users')->result_array();

}

public function activateSeller($id){

	if($this->db->where('chawri_sellers_id',$id)->update('chawri_sellers',['chawri_sellers_status'=>'1']))
	{
		return true;
	}
	else{
		return false;
	}
}

public function inActivateSeller($id){

	if($this->db->where('chawri_sellers_id',$id)->update('chawri_sellers',['chawri_sellers_status'=>'0']))
	{
		return true;
	}
	else{
		return false;
	}
}

public function activateBuyer($id){

	if($this->db->where('chawri_users_id',$id)->update('chawri_users',['chawri_users_status'=>'1']))
	{
		return true;
	}
	else{
		return false;
	}
}

public function inActivateBuyer($id){

	if($this->db->where('chawri_users_id',$id)->update('chawri_users',['chawri_users_status'=>'0']))
	{
		return true;
	}
	else{
		return false;
	}
}

public function approve (){
       $this->db->where('chawri_products_orders_status','admin_approvel_done');
    $this->db->from('chawri_products_orders');
    $this->db->join('chawri_categories', 'chawri_categories.chawri_categories_id = chawri_products_orders.chawri_products_orders_categories','left');
   return $query = $this->db->get()->result_array();
   
     
   }

  public function cancel(){
 
     $this->db->where('chawri_products_orders_status','cancelled');
    $this->db->from('chawri_products_orders');
    $this->db->join('chawri_categories', 'chawri_categories.chawri_categories_id = chawri_products_orders.chawri_products_orders_categories','left');
   return $query = $this->db->get()->result_array();
   
   
  }
  public function complete(){

     $this->db->where('chawri_products_orders_status','Received');
    $this->db->from('chawri_products_orders');
    $this->db->join('chawri_categories', 'chawri_categories.chawri_categories_id = chawri_products_orders.chawri_products_orders_categories','left');
   return $query = $this->db->get()->result_array();


   
  }
  
  public function cancel_buyer(){

     $this->db->where('chawri_products_orders_status','cancelled_by_buyer');
    $this->db->from('chawri_products_orders');
    $this->db->join('chawri_categories', 'chawri_categories.chawri_categories_id = chawri_products_orders.chawri_products_orders_categories','left');
   return $query = $this->db->get()->result_array();


   
  }
   public function countSellers(){

   	       $this->db->where('chawri_sellers_status=', 1);
   	       $query = $this->db->get('chawri_sellers');
   	      return $count  = $query->num_rows();
       
          
   }
    public function countBuyers(){

   	       $this->db->where('chawri_users_status=', 1);
   	       $query = $this->db->get('chawri_users');
   	      return $count  = $query->num_rows();
       
          
   }

    public function countProducts(){

   	        $this->db->where('chawri_products_orders_status=', 'admin_approvel_pending');
   	       $query = $this->db->get('chawri_products_orders');
   	      return $count  = $query->num_rows();
       
          
   }

    public function decline($id){
      
         $data = [
            'chawri_products_orders_status' => 'cancelled'
             ];


        return  $this->db->where('chawri_products_orders_id',$id)->update('chawri_products_orders',$data)?true:false;
        
          
     }
}


?>