<?php

/**
 * Created by PhpStorm.
 * User: Javed
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Mdl_products extends CI_Model
{


    private $products_id;
    private $products_name;
    private $products_brand_name;
    private $products_manufacturer;
    private $products_substance;
    private $products_size;
    private $products_thickness;
    private $products_grain;
    private $products_sheets_per_packet;
    private $products_packets_per_bundle;
    private $products_quantity_on_offer;
    private $products_packing;
    private $products_rate;
    private $products_cenvat_amount;
    private $sellers_id;
    private $products_weight;
    private $date;
    private $extension;
    private $description;
    private $categories;


 /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $products_id
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

 /**
     * @return mixed
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param mixed $products_id
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

 /**
     * @return mixed
     */
    public function getExtensionDate()
    {
        return $this->extension_date;
    }

    /**
     * @param mixed $products_id
     */
    public function setExtensionDate($extension_date)
    {
        $this->extension_date = $extension_date;
    }


 /**
     * @return mixed
     */
    public function getProductsWeight()
    {
        return $this->products_weight;
    }

    /**
     * @param mixed $products_id
     */
    public function setProductsWeight($products_weight)
    {
        $this->products_weight = $products_weight;
    }

    /**
     * @return mixed
     */
    public function getProductsId()
    {
        return $this->products_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setProductsId($products_id)
    {
        $this->products_id = $products_id;
    }

    /**
     * @return mixed
     */
    public function getProductsName()
    {
        return $this->products_name;
    }

    /**
     * @param mixed $products_name
     */
    public function setProductsName($products_name)
    {
        $this->products_name = $products_name;
    }

    /**
     * @return mixed
     */
    public function getProductsBrandName()
    {
        return $this->products_brand_name;
    }

    /**
     * @param mixed $products_brand_name
     */
    public function setProductsBrandName($products_brand_name)
    {
        $this->products_brand_name = $products_brand_name;
    }

    /**
     * @return mixed
     */
    public function getProductsManufacturer()
    {
        return $this->products_manufacturer;
    }

    /**
     * @param mixed $products_manufacturer
     */
    public function setProductsManufacturer($products_manufacturer)
    {
        $this->products_manufacturer = $products_manufacturer;
    }

    /**
     * @return mixed
     */
    public function getProductsSubstance()
    {
        return $this->products_substance;
    }

    /**
     * @param mixed $products_substance
     */
    public function setProductsSubstance($products_substance)
    {
        $this->products_substance = $products_substance;
    }

    /**
     * @return mixed
     */
    public function getProductsSize()
    {
        return $this->products_size;
    }

    /**
     * @param mixed $products_size
     */
    public function setProductsSize($products_size)
    {
        $this->products_size = $products_size;
    }

    /**
     * @return mixed
     */
    public function getProductsThickness()
    {
        return $this->products_thickness;
    }

    /**
     * @param mixed $products_thickness
     */
    public function setProductsThickness($products_thickness)
    {
        $this->products_thickness = $products_thickness;
    }

    /**
     * @return mixed
     */
    public function getProductsGrain()
    {
        return $this->products_grain;
    }

    /**
     * @param mixed $products_grain
     */
    public function setProductsGrain($products_grain)
    {
        $this->products_grain = $products_grain;
    }

    /**
     * @return mixed
     */
    public function getProductsSheetsPerPacket()
    {
        return $this->products_sheets_per_packet;
    }

    /**
     * @param mixed $products_sheets_per_packet
     */
    public function setProductsSheetsPerPacket($products_sheets_per_packet)
    {
        $this->products_sheets_per_packet = $products_sheets_per_packet;
    }

    /**
     * @return mixed
     */
    public function getProductsPacketsPerBundle()
    {
        return $this->products_packets_per_bundle;
    }

    /**
     * @param mixed $products_packets_per_bundle
     */
    public function setProductsPacketsPerBundle($products_packets_per_bundle)
    {
        $this->products_packets_per_bundle = $products_packets_per_bundle;
    }

    /**
     * @return mixed
     */
    public function getProductsQuantityOnOffer()
    {
        return $this->products_quantity_on_offer;
    }

    /**
     * @param mixed $products_quantity_on_offer
     */
    public function setProductsQuantityOnOffer($products_quantity_on_offer)
    {
        $this->products_quantity_on_offer = $products_quantity_on_offer;
    }

    /**
     * @return mixed
     */
    public function getProductsPacking()
    {
        return $this->products_packing;
    }

    /**
     * @param mixed $products_packing
     */
    public function setProductsPacking($products_packing)
    {
        $this->products_packing = $products_packing;
    }

    /**
     * @return mixed
     */
    public function getProductsRate()
    {
        return $this->products_rate;
    }

    /**
     * @param mixed $products_rate
     */
    public function setProductsRate($products_rate)
    {
        $this->products_rate = $products_rate;
    }

    /**
     * @return mixed
     */
    public function getProductsCenvatAmount()
    {
        return $this->products_cenvat_amount;
    }

    /**
     * @param mixed $products_cenvat_amount
     */
    public function setProductsCenvatAmount($products_cenvat_amount)
    {
        $this->products_cenvat_amount = $products_cenvat_amount;
    }

    /**
     * @return mixed
     */
    public function getSellersId()
    {
        return $this->sellers_id;
    }

    /**
     * @param mixed $sellers_id
     */
    public function setSellersId($sellers_id)
    {
        $this->sellers_id = $sellers_id;
    }

/**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $sellers_id
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "insert":

                     $this->setSellersId($this->security->xss_clean($this->sellers_id));
                    $this->setProductsBrandName($this->security->xss_clean($this->products_brand_name));
                    $this->setProductsName($this->security->xss_clean($this->products_name));
                    $this->setProductsCenvatAmount($this->security->xss_clean($this->products_cenvat_amount));
                    $this->setProductsManufacturer($this->security->xss_clean($this->products_manufacturer));
                    $this->setProductsGrain($this->security->xss_clean($this->products_grain));
                    $this->setProductsPacketsPerBundle($this->security->xss_clean($this->products_packets_per_bundle));
                    $this->setProductsPacking($this->security->xss_clean($this->products_packing));
                    $this->setProductsQuantityOnOffer($this->security->xss_clean($this->products_quantity_on_offer));
                    $this->setProductsRate($this->security->xss_clean($this->products_rate));
                    $this->setProductsSheetsPerPacket($this->security->xss_clean($this->products_sheets_per_packet));
                    $this->setProductsSize($this->security->xss_clean($this->products_size));
                    $this->setProductsSubstance($this->security->xss_clean($this->products_substance));
                    $this->setProductsThickness($this->security->xss_clean($this->products_thickness));
                    $this->setProductsWeight($this->security->xss_clean($this->products_weight));
                    $this->setCategories($this->security->xss_clean($this->categories));


                break;
            case "update":
                $this->setProductsBrandName($this->security->xss_clean($this->products_brand_name));
                $this->setProductsName($this->security->xss_clean($this->products_name));
                $this->setProductsCenvatAmount($this->security->xss_clean($this->products_cenvat_amount));
                $this->setProductsManufacturer($this->security->xss_clean($this->products_manufacturer));
                $this->setProductsGrain($this->security->xss_clean($this->products_grain));
                $this->setProductsPacketsPerBundle($this->security->xss_clean($this->products_packets_per_bundle));
                $this->setProductsPacking($this->security->xss_clean($this->products_packing));
                $this->setProductsQuantityOnOffer($this->security->xss_clean($this->products_quantity_on_offer));
                $this->setProductsRate($this->security->xss_clean($this->products_rate));
                $this->setProductsWeight($this->security->xss_clean($this->products_weight));
                $this->setProductsSheetsPerPacket($this->security->xss_clean($this->products_sheets_per_packet));
                $this->setProductsSize($this->security->xss_clean($this->products_size));
                $this->setProductsSubstance($this->security->xss_clean($this->products_substance));
                $this->setProductsThickness($this->security->xss_clean($this->products_thickness));
                $this->setCategories($this->security->xss_clean($this->categories));


                break;
            default:
                break;
        }


    }

    public function insertProduct($data){

        //$this->_validate('insert');
       /* $dta1=array();
        foreach($data as $row){
            array_push($dta1,implode(',',$row));
        }*/


        /*echo "<pre/>";
        print_r($dta1);
        die();*/

       /* $data = [
            'chawri_products_name' => $this->products_name,
            'chawri_products_brand_name' => $this->products_brand_name,
            'chawri_products_manufacturer' => $this->products_manufacturer,
            'chawri_products_substance' => $this->products_substance,

            'chawri_products_size' => $this->products_size,
            'chawri_products_thickness' => $this->products_thickness,
            'chawri_products_grain' => $this->products_grain,
            'chawri_products_sheets_per_packet' => $this->products_sheets_per_packet,
            'chawri_products_packets_per_bundle' => $this->products_packets_per_bundle,
            'chawri_products_quantity_on_offer' => $this->products_quantity_on_offer,
            'chawri_products_packing' => $this->products_packing,
            'chawri_products_rate' => $this->products_rate,
            'chawri_products_cenvat_amount' => $this->products_cenvat_amount,
            'chawri_sellers_id' => $this->sellers_id


        ];*/
       /* foreach ($data as $row){*/
      if($q=$this->db->insert_batch('chawri_products', $data)){
          return true;
      }

       /* }
        if($q){a
            return true;
        }*/
        return false;
    }



public function insertProductReel($data){



      if($q=$this->db->insert_batch('chawri_products', $data)){
          return true;
      }


        return false;


}










    public function setData()
    {
        switch (func_get_arg(0)) {
            case "insert":
                $this->setSellersId(func_get_arg(1));

                //print_r(func_get_arg(2));
                //  die();


                    //echo $products[0]['products_name'];


                    $this->setProductsBrandName(func_get_arg(2));
                    $this->setProductsName(func_get_arg(3));
                    $this->setProductsCenvatAmount(func_get_arg(4));
                    $this->setProductsManufacturer(func_get_arg(5));
                    $this->setProductsGrain(func_get_arg(6));
                    $this->setProductsPacketsPerBundle(func_get_arg(7));
                    $this->setProductsPacking(func_get_arg(8));
                    $this->setProductsQuantityOnOffer(func_get_arg(9));
                    $this->setProductsRate(func_get_arg(10));
                    $this->setProductsSheetsPerPacket(func_get_arg(11));
                    $this->setProductsSize(func_get_arg(12));
                    $this->setProductsWeight(func_get_arg(13));
                    $this->setProductsSubstance(func_get_arg(14));
                    $this->setProductsThickness(func_get_arg(15));
                    $this->setCategories(func_get_arg(16));


                break;
            case "update":

                $this->setSellersId(func_get_arg(1));
                $this->setProductsId(func_get_arg(2));
                $this->setProductsBrandName(func_get_arg(3));
                $this->setProductsName(func_get_arg(4));
                $this->setProductsManufacturer(func_get_arg(5));
                $this->setProductsSubstance(func_get_arg(6));
                $this->setProductsThickness(func_get_arg(7));
                $this->setProductsSize(func_get_arg(8));
                $this->setProductsGrain(func_get_arg(9));
                $this->setProductsSheetsPerPacket(func_get_arg(10));
                $this->setProductsPacketsPerBundle(func_get_arg(11));
                $this->setProductsWeight(func_get_arg(12));
                $this->setProductsQuantityOnOffer(func_get_arg(13));
                $this->setProductsPacking(func_get_arg(14));
                $this->setProductsRate(func_get_arg(15));
                $this->setProductsCenvatAmount(func_get_arg(16));
                 $this->setCategories(func_get_arg(17));

                break;

           case 'extension':
/*                print_r(func_get_arg(2));
                die();*/
                $this->setExtension(func_get_arg(1));
                $this->setExtensionDate(func_get_arg(2));
                $this->setProductsId(func_get_arg(3));

            /* echo $this->getExtensionDate();
             die();*/
             break;

          case 'buy':
             $this->setProductsQuantityOnOffer(func_get_arg(1));
             $this->setDescription(func_get_arg(2));
             $this->setProductsId(func_get_arg(3));

          break;

            default:
                break;
        }

    }


    public function showProducts(){

        $data=$this->db->get('chawri_products')->result_array();
        return $data;
    }



public function update (){
       $this->_validate('update');
   $data = [
            'chawri_products_name' => $this->products_name,
            'chawri_products_brand_name' => $this->products_brand_name,
            'chawri_products_manufacturer' => $this->products_manufacturer,
            'chawri_products_substance' => $this->products_substance,

            'chawri_products_size' => $this->products_size,
            'chawri_products_thickness' => $this->products_thickness,
            'chawri_products_grain' => $this->products_grain,
            'chawri_products_sheets_per_packet' => $this->products_sheets_per_packet,
            'chawri_products_packets_per_bundle' => $this->products_packets_per_bundle,
            'chawri_products_quantity_on_offer' => $this->products_quantity_on_offer,
            'chawri_products_packing' => $this->products_packing,
            'chawri_products_rate' => $this->products_rate,
            'chawri_products_cenvat_amount' => $this->products_cenvat_amount,
            'chawri_products_weight' => $this->products_weight,
            'chawri_products_categories' => $this->categories


        ];
      /*  echo "<pre/>";
        print_r($data);
      echo $this->products_id;
         echo $this->sellers_id;
      die();*/
      $this->db->where(array('chawri_sellers_id' =>$this->sellers_id ,'chawri_products_id'=>$this->products_id))->update('chawri_products',$data);
     if($this->db->affected_rows()){
        return true;
     }
     else{
        return false;
     }
    }




public function singleProducts(){

 $this->_validate('insert');
        $data = [
            'chawri_products_name' => $this->products_name,
            'chawri_products_brand_name' => $this->products_brand_name,
            'chawri_products_manufacturer' => $this->products_manufacturer,
            'chawri_products_substance' => $this->products_substance,

            'chawri_products_size' => $this->products_size,
            'chawri_products_thickness' => $this->products_thickness,
            'chawri_products_grain' => $this->products_grain,
            'chawri_products_sheets_per_packet' => $this->products_sheets_per_packet,
            'chawri_products_packets_per_bundle' => $this->products_packets_per_bundle,
            'chawri_products_quantity_on_offer' => $this->products_quantity_on_offer,
            'chawri_products_packing' => $this->products_packing,
            'chawri_products_rate' => $this->products_rate,
            'chawri_products_cenvat_amount' => $this->products_cenvat_amount,
            'chawri_products_weight' => $this->products_weight,
            'chawri_sellers_id' => $this->sellers_id,
            
            'chawri_products_categories' => $this->categories


        ];

        if($this->db->insert('chawri_products',$data)){
          return true;
        }
        else{
          return false;
        }

}


public function showUpdate($id){

  return $this->db->where('chawri_products_id',$id)->get('chawri_products')->result_array();
}


public function delete($id){

return $this->db->where('chawri_products_id',$id)->delete('chawri_products')?true:false;

}

public function getProducts($id){

  return $this->db->where('chawri_products_id',$id)->get('chawri_products')->result_array();

}



 public function buyNow() {

 $date = date('Y-m-d H:i:s');


$products=$this->getProducts($this->getProductsId());
/*echo $this->getProductsQuantityOnOffer();
echo $this->getDescription();
echo "<pre/>";
print_r($products);

echo  $products[0]['chawri_products_name'];
die();
*/

     $data= array(

        'chawri_products_orders_buyer_id' =>                     $this->session->userdata['user_data'][0]['users_id'],
        'chawri_products_orders_products_id' =>                  $this->getProductsId(),
        'chawri_sellers_id'=>                                    $products[0]['chawri_sellers_id'],
        'chawri_products_orders_date' =>                         $date,
        'chawri_products_orders_products_name'=>                 $products[0]['chawri_products_name'],
        'chawri_products_orders_products_brand_name'=>           $products[0]['chawri_products_brand_name'],
        'chawri_products_orders_products_manufacturer'=>         $products[0]['chawri_products_manufacturer'],
        'chawri_products_orders_products_substance' =>           $products[0]['chawri_products_substance'],
        'chawri_products_orders_products_size'=>                 $products[0]['chawri_products_size'],
        'chawri_products_orders_products_thickness'=>            $products[0]['chawri_products_thickness'],
        'chawri_products_orders_products_grain'=>                $products[0]['chawri_products_grain'],
        'chawri_products_orders_products_sheets_per_packet'=>    $products[0]['chawri_products_sheets_per_packet'],
        'chawri_products_orders_products_packets_per_bundle'=>   $products[0]['chawri_products_packets_per_bundle'],
        'chawri_products_orders_products_quantity_on_offer'=>    $this->getProductsQuantityOnOffer(),
        'chawri_products_orders_products_packing'=>              $products[0]['chawri_products_packing'],
        'chawri_products_orders_products_rate'=>                 $products[0]['chawri_products_rate'],
        'chawri_products_orders_products_cenvat_amount'=>        $products[0]['chawri_products_cenvat_amount'],
        'chawri_products_orders_products_reel_sheet'=>           $products[0]['chawri_products_reel_sheet'],
        'chawri_products_orders_products_weight'=>               $products[0]['chawri_products_weight'],
        'chawri_products_orders_products_description'=>          $this->getDescription(),
        'chawri_products_orders_categories' =>                   $products[0]['chawri_products_categories']
        );
  if($this->db->insert('chawri_products_orders',$data)){
          return true;
        }
        else{
          return false;
        }
    }

    public function getOrderDetails()
    {
      $query ="select * from chawri_products_orders order by chawri_products_orders_id DESC limit 1";
      return $this->db->query($query)->result_array();
    }
    public function getSellersDetails($id)
    {
      return $this->db->query("select * from chawri_sellers where chawri_sellers_id=(select chawri_sellers_id from chawri_products where chawri_products_id ='$id')")->result_array();
    }

public function extension(){

$input_date=$this->extension_date;


$better_date = nice_date($input_date, 'Y-m-d');



 $data = [
            'chawri_extension_sellers_id' => $this->session->userdata['user_data'][0]['users_id'],
            'chawri_products_orders_id' => $this->products_id,
            'chawri_extension_date' => $better_date,
            'chawri_extension_reasons' => $this->extension,
            'chawri_extension_current_date' =>  $date = date('Y-m-d H:i:s')

        ];

        if($this->db->insert('chawri_extension',$data)){
          return true;
        }
        else{
          return false;
        }


}


public function approvel() {

$this->db->where('chawri_products_orders_buyer_id',$this->session->userdata['user_data'][0]['users_id']);
$where = "(chawri_products_orders_status='admin_approvel_pending' OR chawri_products_orders_status='admin_approvel_done')";
return $this->db->where($where)->get('chawri_products_orders')->result_array();


}


   public function pending (){
        $this->db->where('chawri_products_orders_buyer_id',$this->session->userdata['user_data'][0]['users_id']);
    return $this->db->where('chawri_products_orders_status','pending')->get('chawri_products_orders')->result_array();

   }

  public function cancel(){

$this->db->where('chawri_products_orders_buyer_id',$this->session->userdata['user_data'][0]['users_id']);
return $this->db->where('chawri_products_orders_status','cancelled')->get('chawri_products_orders')->result_array();
  }


 public function completed(){

$this->db->where('chawri_products_orders_buyer_id',$this->session->userdata['user_data'][0]['users_id']);
return $this->db->where('chawri_products_orders_status','completed')->get('chawri_products_orders')->result_array();
  }

  public function showCategories(){

    return $data=$this->db->get('chawri_categories')->result_array();
/*
    print_r($data);

    die();*/


   
}
 public function getSellers($id){
        
        $this->db->where('chawri_sellers_id',$id);
       return $data=$this->db->get('chawri_sellers')->result_array();


/* print_r($data);
 die();*/
    }

    public function orderCancel($id){

  $data = [
            'chawri_products_orders_status' => 'cancelled'
             ];


        return $this->db->where('chawri_products_orders_id',$id)->update('chawri_products_orders',$data)?true:false;
     }


       /*
        if($this->db->affected_rows()){
        return true;
     }
     else{
        return false;
     }*/
    //}

    public function showCategoryProducts($id){
        $this->db->where('chawri_products_categories',$id);
        $data=$this->db->get('chawri_products')->result_array();
        return $data;
    }
    public function searchProducts($searchText){
        $data = $this->db->query("select * from chawri_products where chawri_products_name like '$searchText%' or chawri_products_brand_name like '$searchText%'")->result_array();
        return $data;
    }
    public function searchProductByGSM($from, $to){
        $data = $this->db->query("select * from chawri_products where chawri_products_thickness BETWEEN '$from' AND $to")->result_array();
        return $data;
    }




}
