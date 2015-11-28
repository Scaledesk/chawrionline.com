<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/12/2015
 * Time: 5:48 PM
 */
class Mdl_sellers extends CI_Model
{

    private $sellers_id;
    private $sellers_email;
    private $sellers_password;
    private $sellers_company_name;
    private $sellers_address;
    private $sellers_pan_no;
    private $sellers_phone;
    private $sellers_excise_no;
    private $sellers_tin_no;
    private $sellers_ac_no;
    private $sellers_ifsc_code;
    private $sellers_bank_name;
    private $sellers_services_tax_no;
    private $sellers_tan_no;
    private $token;
    private $sellers_pin_code;
    private $sellers_state;
    private $sellers_landline;

    /**
     * @return mixed
     */
    public function getSellersPinCode()
    {
        return $this->sellers_pin_code;
    }

    /**
     * @param mixed $sellers_pin_code
     */
    public function setSellersPinCode($sellers_pin_code)
    {
        $this->sellers_pin_code = $sellers_pin_code;
    }

    /**
     * @return mixed
     */
    public function getSellersState()
    {
        return $this->sellers_state;
    }

    /**
     * @param mixed $sellers_state
     */
    public function setSellersState($sellers_state)
    {
        $this->sellers_state = $sellers_state;
    }

    /**
     * @return mixed
     */
    public function getSellersLandline()
    {
        return $this->sellers_landline;
    }

    /**
     * @param mixed $sellers_landline
     */
    public function setSellersLandline($sellers_landline)
    {
        $this->sellers_landline = $sellers_landline;
    }
    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
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
    public function getSellersEmail()
    {
        return $this->sellers_email;
    }

    /**
     * @param mixed $sellers_email
     */
    public function setSellersEmail($sellers_email)
    {
        $this->sellers_email = $sellers_email;
    }

    /**
     * @return mixed
     */
    public function getSellersPassword()
    {
        return $this->sellers_password;
    }

    /**
     * @param mixed $sellers_password
     */
    public function setSellersPassword($sellers_password)
    {
        $this->sellers_password = $sellers_password;
    }

    /**
     * @return mixed
     */
    public function getSellersCompanyName()
    {
        return $this->sellers_company_name;
    }

    /**
     * @param mixed $sellers_company_name
     */
    public function setSellersCompanyName($sellers_company_name)
    {
        $this->sellers_company_name = $sellers_company_name;
    }

    /**
     * @return mixed
     */
    public function getSellersAddress()
    {
        return $this->sellers_address;
    }

    /**
     * @param mixed $sellers_address
     */
    public function setSellersAddress($sellers_address)
    {
        $this->sellers_address = $sellers_address;
    }

    /**
     * @return mixed
     */
    public function getSellersPanNo()
    {
        return $this->sellers_pan_no;
    }

    /**
     * @param mixed $sellers_pan_no
     */
    public function setSellersPanNo($sellers_pan_no)
    {
        $this->sellers_pan_no = $sellers_pan_no;
    }

    /**
     * @return mixed
     */
    public function getSellersPhone()
    {
        return $this->sellers_phone;
    }

    /**
     * @param mixed $sellers_phone
     */
    public function setSellersPhone($sellers_phone)
    {
        $this->sellers_phone = $sellers_phone;
    }

    /**
     * @return mixed
     */
    public function getSellersExciseNo()
    {
        return $this->sellers_excise_no;
    }

    /**
     * @param mixed $sellers_excise_no
     */
    public function setSellersExciseNo($sellers_excise_no)
    {
        $this->sellers_excise_no = $sellers_excise_no;
    }

    /**
     * @return mixed
     */
    public function getSellersTinNo()
    {
        return $this->sellers_tin_no;
    }

    /**
     * @param mixed $sellers_tin_no
     */
    public function setSellersTinNo($sellers_tin_no)
    {
        $this->sellers_tin_no = $sellers_tin_no;
    }

    /**
     * @return mixed
     */
    public function getSellersAcNo()
    {
        return $this->sellers_ac_no;
    }

    /**
     * @param mixed $sellers_ac_no
     */
    public function setSellersAcNo($sellers_ac_no)
    {
        $this->sellers_ac_no = $sellers_ac_no;
    }

    /**
     * @return mixed
     */
    public function getSellersIfscCode()
    {
        return $this->sellers_ifsc_code;
    }

    /**
     * @param mixed $sellers_ifsc_code
     */
    public function setSellersIfscCode($sellers_ifsc_code)
    {
        $this->sellers_ifsc_code = $sellers_ifsc_code;
    }

    /**
     * @return mixed
     */
    public function getSellersBankName()
    {
        return $this->sellers_bank_name;
    }

    /**
     * @param mixed $sellers_bank_name
     */
    public function setSellersBankName($sellers_bank_name)
    {
        $this->sellers_bank_name = $sellers_bank_name;
    }

    /**
     * @return mixed
     */
    public function getSellersServicesTaxNo()
    {
        return $this->sellers_services_tax_no;
    }

    /**
     * @param mixed $sellers_services_tax_no
     */
    public function setSellersServicesTaxNo($sellers_services_tax_no)
    {
        $this->sellers_services_tax_no = $sellers_services_tax_no;
    }

    /**
     * @return mixed
     */
    public function getSellersTanNo()
    {
        return $this->sellers_tan_no;
    }

    /**
     * @param mixed $sellers_tan_no
     */
    public function setSellersTanNo($sellers_tan_no)
    {
        $this->sellers_tan_no = $sellers_tan_no;
    }


    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "registration":
                $this->setSellersEmail($this->security->xss_clean($this->sellers_email));
                $this->setSellersPassword($this->security->xss_clean($this->sellers_password));
                $this->setSellersCompanyName($this->security->xss_clean($this->sellers_company_name));
                $this->setSellersAddress($this->security->xss_clean($this->sellers_address));
                $this->setSellersLandline($this->security->xss_clean($this->sellers_landline));
                $this->setSellersPhone($this->security->xss_clean($this->sellers_phone));
                $this->setSellersPinCode($this->security->xss_clean($this->sellers_pin_code));
                $this->setSellersState($this->security->xss_clean($this->sellers_state));
               /* $this->setSellersExciseNo($this->security->xss_clean($this->sellers_excise_no));
                $this->setSellersTinNo($this->security->xss_clean($this->sellers_tin_no));
                $this->setSellersServicesTaxNo($this->security->xss_clean($this->sellers_services_tax_no));
                $this->setSellersTanNo($this->security->xss_clean($this->sellers_tan_no));*/

                break;
            case "profile":
                   $this->setSellersPanNo($this->security->xss_clean($this->setSellersPanNo()));
                   $this->setSellersTinNo($this->security->xss_clean($this->sellers_tin_no));
                   $this->setSellersExciseNo($this->security->xss_clean($this->sellers_excise_no));
                   $this->setSellersServicesTaxNo($this->security->xss_clean($this->sellers_services_tax_no));
                   $this->setSellersTanNo($this->security->xss_clean($this->sellers_tan_no));

                break;
            default:
                break;
        }


    }
public function chechSellers(){
    /*$cont= $this->db->where('chawri_sellers_email',$this->sellers_email)->select('chawri_sellers_id')->get('chawri_sellers');
 return $cont->num_rows();*/

    $cont=$this->db->where('chawri_sellers_email',$this->sellers_email)->select('chawri_sellers_id')->get('chawri_sellers');
    $cont1=$this->db->where('chawri_users_username',$this->sellers_email)->select('chawri_users_id')->get('chawri_users');

     if($cont->num_rows()){
        return true;
     }
     elseif ($cont1->num_rows()) {
         return true;
     }
     return false;

}


    public function registration(){
       /* user_name_email password confirm_password company_name address state pin pin phone landline
        chawri_sellers_landline chawri_sellers_state*/
        $this->_validate('registration');
        $this->setSellersPassword(password_hash($this->sellers_password, PASSWORD_DEFAULT));
        $data = [
            'chawri_sellers_email' => $this->sellers_email,
            'chawri_sellers_password' => $this->sellers_password,
            'chawri_sellers_company_name' => $this->sellers_company_name,
            'chawri_sellers_address' => $this->sellers_address,

            'chawri_sellers_landline' => $this->sellers_landline,
            'chawri_sellers_phone' => $this->sellers_phone,
            'chawri_sellers_state' => $this->sellers_state,
            'chawri_sellers_pin_code' => $this->sellers_pin_code
            /*'chawri_sellers_services_tax_no' => $this->sellers_services_tax_no,
            'chawri_sellers_tan_no' => $this->sellers_tan_no*/


        ];
        if ($this->db->insert('chawri_sellers', $data)) {
            return true;
        }
        return false;
    }


    public function setData()
    {
        switch (func_get_arg(0)) {
            case "register":
                $this->setSellersEmail(func_get_arg(1));
                $this->setSellersPassword(func_get_arg(2));
                $this->setSellersCompanyName(func_get_arg(3));
                $this->setSellersAddress(func_get_arg(4));
                $this->setSellersState(func_get_arg(5));
                $this->setSellersPinCode(func_get_arg(6));
                $this->setSellersPhone(func_get_arg(7));
                $this->setSellersLandline(func_get_arg(8));

                /*$this->setSellersServicesTaxNo(func_get_arg(9));
                $this->setSellersTanNo(func_get_arg(10));
                $data['address'],$data['state'],$data['pin'],$data['phone'],$data['landline']*/


                break;
            case "token":
                   $this->setToken(func_get_arg(1));
                break;

            case "profile":

                $this->setSellersId(func_get_arg(1));
                $this->setSellersTinNo(func_get_arg(2));
                $this->setSellersPanNo(func_get_arg(3));
                $this->setSellersExciseNo(func_get_arg(4));
                $this->setSellersServicesTaxNo(func_get_arg(5));
                $this->setSellersTanNo(func_get_arg(6));
                break;
            case "checkUser":
                  /* echo "n";
                   echo func_get_arg(2);
                   echo "n";
                   die();*/
                $this->setSellersEmail(func_get_arg(1));
                $this->setSellersPassword(func_get_arg(2));
                break;
            case 'register_update':
                $this->setSellersCompanyName(func_get_arg(1));
                $this->setSellersAddress(func_get_arg(2));
                $this->setSellersState(func_get_arg(3));
                $this->setSellersPinCode(func_get_arg(4));
                $this->setSellersPhone(func_get_arg(5));
                $this->setSellersLandline(func_get_arg(6));
                break;
            default:
                break;
        }

    }
    public function insertToken(){
        return $this->db->where('chawri_sellers_email',$this->getSellersEmail())->update('chawri_sellers',[
            'chawri_sellers_token'=>$this->getToken()
        ])?true:false;
    }
    public function verifyEmail(){

        $this->db->where('chawri_sellers_token',$this->getToken())->update('chawri_sellers',['chawri_sellers_status'=>'1']);
        if($this->db->affected_rows()){
            $this->db->where('chawri_sellers_token',$this->getToken())->update('chawri_sellers',[
                'chawri_sellers_token'=>NULL]);
            return true;
        }else{


            return false;
        }

    }


    public function removeToken(){
        $token = $this->session->userdata('token');
        return $this->db->where('chawri_sellers_token',$token)->delete('chawri_sellers')?true:false;
    }


    public function getUserData()
    {



        $data= $this->db->where('chawri_sellers_email',$this->sellers_email)->get('chawri_sellers')->result_array();

        return $data;

    }

    public function checkSellers(){



      $query=$this->db->where(array('chawri_sellers_email'=>$this->getSellersEmail()))->select(array('chawri_sellers_password'))->get('chawri_sellers');



      if( password_verify($this->getSellersPassword(), $query->result()[0]->chawri_sellers_password)){


            return true;
        }

        return false;



    }


    public  function profile(){

        $data = [
            'chawri_sellers_excise_no' => $this->sellers_excise_no,
            'chawri_sellers_pan_no' => $this->sellers_pan_no,

            'chawri_sellers_tin_no' => $this->sellers_tin_no,
            'chawri_sellers_services_tax_no' => $this->sellers_services_tax_no,
            'chawri_sellers_tan_no' => $this->sellers_tan_no


        ];
        return $this->db->where('chawri_sellers_id',$this->getSellersId())->update('chawri_sellers',$data)?true:false;
    }


    public function getState(){

        $data= $this->db->get('chawri_states')->result_array();

        return $data;
    }



    public function showProducts(){

 /*echo $this->session->userdata['user_data'][0]['users_id'];
 die();*/
         $data=$this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id'])->get('chawri_products')->result_array();

          return $data;
    }

     public function getProfile(){

          $data=$this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id'])->get('chawri_sellers')->result_array();

          return $data;
     }

     public function updateGetProfile(){
         $data = [
            'chawri_sellers_company_name' => $this->sellers_company_name,
            'chawri_sellers_address' => $this->sellers_address,

            'chawri_sellers_landline' => $this->sellers_landline,
            'chawri_sellers_phone' => $this->sellers_phone,
            'chawri_sellers_state' => $this->sellers_state,
            'chawri_sellers_pin_code' => $this->sellers_pin_code
        ];
       /*print_r($data);
       die();*/

        return $this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id'])->update('chawri_sellers',$data)?true:false;
     }


     public function conform($id){
         $data = [
            'chawri_products_orders_status' => 'admin_approvel_pending'
             ];


        return $this->db->where('chawri_products_orders_id',$id)->update('chawri_products_orders',$data)?true:false;
     }


     public function cancel($id){
         $data = [
            'chawri_products_orders_status' => 'cancelled'
             ];


        return $this->db->where('chawri_products_orders_id',$id)->update('chawri_products_orders',$data)?true:false;
     }


 public function getCancel(){
            $this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id']);
        return $this->db->where('chawri_products_orders_status','cancelled')->get('chawri_products_orders')->result_array();
     }
      public function getPending(){
        $this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id']);
        return $this->db->where('chawri_products_orders_status','pending')->get('chawri_products_orders')->result_array();
     }
     public function approvedProducts(){
       $this->db->where('chawri_sellers_id',$this->session->userdata['user_data'][0]['users_id']);
       $where = "(chawri_products_orders_status='admin_approvel_pending' OR chawri_products_orders_status='admin_approvel_done')";
       //$this->db->where('chawri_products_orders_status','admin_approvel_pending');
      return $this->db->where($where)->get('chawri_products_orders')->result_array();

/*print_r($data);
die();
    return;
*/
     }

}
