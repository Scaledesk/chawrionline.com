<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 11/27/2015
 * Time: 4:10 PM
 */
class Mdl_categories extends CI_Model
{
//chawri_categories_id`, `chawri_categories_sellers_id`, `chawri_categories_name

    private $categories_id;
    private $sellers_id;
    private $categories_name;
   



 /**
     * @return mixed
     */
    public function getCategoriesId()
    {
        return $this->categories_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setCategoriesId($categories_id)
    {
        $this->categories_id = $categories_id;
    }


 /**
     * @return mixed
     */
    public function getSellersId()
    {
        return $this->sellers_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setSellersId($sellers_id)
    {
        $this->sellers_id = $sellers_id;
    }


 /**
     * @return mixed
     */
    public function getCategoriesName()
    {
        return $this->categories_name;
    }

    /**
     * @param mixed $products_id
     */
    public function setCategoriesName($categories_name)
    {
        $this->categories_name = $categories_name;
    }




    public function setData()
    {
        switch (func_get_arg(0)) {
            case "insert":
              

                    $this->setCategoriesName(func_get_arg(1)); 


           
                break;
                 case "update":
              

                    $this->setCategoriesName(func_get_arg(1)); 


           
                break;


                default:
                break;
        }
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "insert":
           /* echo "string";
               die();*/
                    /* $this->setSellersId($this->security->xss_clean($this->sellers_id));*/
                    $this->setCategoriesName($this->security->xss_clean($this->categories_name));
                   
                break;
            default: 
                break;
        }
    }

               

public function insertCategories(){

 $this->_validate('insert');

        $data = [
            
            'chawri_categories_name' => $this->categories_name,
          ];
   /* print_r($data);

die();*/
        if($this->db->insert('chawri_categories',$data)){
          return true;
        }
        else{
          return false;
        }


}


public function getCategories(){

	return $data=$this->db->get('chawri_categories')->result_array();
/*
    print_r($data);

	die();*/
}



public function getCategory($id){

return $this->db->where('chawri_categories_id',$id)->get('chawri_categories')->result_array();

}


public function update($id){
    $data=['chawri_categories_name'=>$this->getCategoriesName()];
return $this->db->where('chawri_categories_id',$id)->update('chawri_categories',$data)?true:false;

}
}