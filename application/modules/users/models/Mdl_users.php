<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 14/9/15
 * Time: 7:05 PM
 */
class Mdl_users extends CI_Model
{
    const GUEST_ID = 1; //may be needs to do it like it take it from database or to define user level as global constants later. It will be seen in future.
    private $user_id;
    private $user_name;
    private $password;
    private $role_id;
    private $roles_name;
    private $permissions_name;
    private $social_id;
    private $token;
    private $provider;
    private $status;
    private $fname;
    private $lname;
    private $phone;
    private $contact_query;
    private $file;
    private $order_id;
    private $mobile;
    private $tin_no;
    private $pan_no;
    private $excise_no;
    private $services_tax_no;
    private $tan_no;
    private $address;
    private $state;
     /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $fname
     */
    public function setState($state)
    {
        $this->state = $state;
    } 
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $fname
     */
    public function setAddress($address)
    {
        $this->address = $address;
    } 
/**
     * @return mixed
     */
    public function getTanNo()
    {
        return $this->tan_no;
    }

    /**
     * @param mixed $fname
     */
    public function setTanNo($tan_no)
    {
        $this->tan_no = $tan_no;
    }   
/**
     * @return mixed
     */
    public function getServicesTaxNo()
    {
        return $this->services_tax_no;
    }

    /**
     * @param mixed $fname
     */
    public function setServicesTaxNo($services_tax_no)
    {
        $this->services_tax_no = $services_tax_no;
    }   
/**
     * @return mixed
     */
    public function getExciseNo()
    {
        return $this->excise_no;
    }

    /**
     * @param mixed $fname
     */
    public function setExciseNo($excise_no)
    {
        $this->excise_no = $excise_no;
    }   
/**
     * @return mixed
     */
    public function getPanNo()
    {
        return $this->pan_no;
    }

    /**
     * @param mixed $fname
     */
    public function setPanNo($pan_no)
    {
        $this->pan_no = $pan_no;
    }    
  /**
     * @return mixed
     */
    public function getTinNo()
    {
        return $this->tin_no;
    }

    /**
     * @param mixed $fname
     */
    public function setTinNo($tin_no)
    {
        $this->tin_no = $tin_no;
    }


/**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $fname
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
 /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $fname
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }
 /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $fname
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

     /**
     * @return mixed
     */
    public function getContactQuery()
    {
        return $this->contact_query;
    }

    /**
     * @param mixed $fname
     */
    public function setContactQuery($contact_query)
    {
        $this->contact_query = $contact_query;
    }

     /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $fname
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


    public function __construct()
    {
        parent::__construct();
        $this->role_id = self::GUEST_ID;
        $this->permissions_name = array();
    }

    /**
     * @param mixed $roles_name
     */
    public function setRolesName($roles_name)
    {
        $this->roles_name = $roles_name;
    }

    /**
     * @param mixed $permissions_name
     */
    public function setPermissionsName($permissions_name)
    {
        $this->permissions_name = $permissions_name;
    }

    /**
     *perform set data for class functions.
     */
    public function setData()
    {
        switch (func_get_arg(0)) {
            case "register":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                $this->setFname(func_get_arg(3));
                $this->setLname(func_get_arg(4));
                $this->setPhone(func_get_arg(5));
                $this->setAddress(func_get_arg(6));
                $this->setState(func_get_arg(7));

                break;
                case "checkUser":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                break;
            case "setSessionData": {

                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                break;


            }
                break;
            case "facebook_login": {
                $this->setUserName(func_get_arg(1));
                $this->setSocialId(func_get_arg(2));
                $this->setToken(func_get_arg(3));
                $this->setProvider(func_get_arg(4));
                break;
            }
            case "is_Social": {
                $this->setUserId(func_get_arg(1));
                $this->setProvider(func_get_arg(2));
                break;
            }
            case 'UidEmail' : {
                $this->setUserId(func_get_arg(1));
                $this->setUserId(func_get_arg(2));
                break;
            }


            case'get_email': {
                $this->setUserName(func_get_arg(1));
                $this->setToken(func_get_arg(2));
                break;


            }

            case 'token':{
                $this->setToken(func_get_arg(1));

              break;
            }

            case'pass':{
                $this->setPassword(func_get_arg(1));


                break;

            }
            case 'update':

                $this->setFname(func_get_arg(1)); 
                $this->setLname(func_get_arg(2));
                $this->setPhone(func_get_arg(3));
                break;
         case 'contact':


                $this->setFname(func_get_arg(1));
                $this->setUserName(func_get_arg(2));
                $this->setContactQuery(func_get_arg(3));
                $this->setMobile(func_get_arg(4));

             break;
         case 'bank_details':


                $this->setFile(func_get_arg(1));
                $this->setOrderId(func_get_arg(2));
                

             break;

       case 'information':


                $this->setTinNo(func_get_arg(1));
                $this->setPanNo(func_get_arg(2));
                $this->setExciseNo(func_get_arg(3));
                $this->setServicesTaxNo(func_get_arg(4));
                $this->setTanNo(func_get_arg(5));
                

             break;
            default:
                break;
        }

    }


    /**
     * @param mixed $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param mixed $social_id
     */
    public function setSocialId($social_id)
    {
        $this->social_id = $social_id;
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

    public function getToken()
    {
        return $this->token;
    }

    public function getUserId()
    {
        if (!$this->user_id) {
            $user_id = $this->db->where('chawri_users_username', $this->getUserName())->select(array('chawri_users_id'))->get('chawri_users')->result_array();
            $this->setUserId($user_id[0]['chawri_users_id']);
        }
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }


    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @return mixed
     */
    public function getRolesName()
    {
        return $this->roles_name;
    }

    /**
     * @return array
     */
    public function getPermissionsName()
    {
        return $this->permissions_name;
    }



public function chechUsers(){

     $cont=$this->db->where('chawri_users_username',$this->user_name)->select('chawri_users_id')->get('chawri_users');
      $cont1=$this->db->where('chawri_sellers_email',$this->user_name)->select('chawri_sellers_id')->get('chawri_sellers');
     if($cont->num_rows()){
        return true;
     }
     elseif ($cont1->num_rows()) {
         return true;
     }
     return false;

}


    public function getCategories(){
        return  $this->db->get('chawri_categories')->result();
     /*   print_r($d);
        die;*/
    }





    public function register()
    {
        switch (func_get_arg(0)) {
            case 'normal_registration':


                $this->_validate('normal_registration');
                $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
                $data = [
                    'chawri_users_username' => $this->user_name,
                    'chawri_users_password' => $this->password,
                    'chawri_users_fname' => $this->fname,
                    'chawri_users_lname' => $this->lname,
                    'chawri_users_phone' =>  $this->phone,
                    'chawri_users_role'=>'buyer',
                    'chawri_users_address'=> $this->address,
                    'chawri_users_state'=> $this->state

                ];
                if ($this->db->insert('chawri_users', $data)) {
                    return true;
                }
                return false;
                break;
            case 'social_registration':
                $this->_validate('social_registration');
                $data = [
                    'chawri_users_username' => $this->user_name,
                    'chawri_users_social_id' => $this->social_id,
                    'chawri_users_provider' => $this->provider,
                    'chawri_users_roles_id' => $this->role_id
                ];
                if ($this->db->insert('chawri_users', $data)) {
                    return true;
                }
                return false;
                break;

            case 'get_email':
                $this->_validate(func_get_arg(0));
                return true;
                break;

            default:
                break;
        }

    }

    /**
     * this checks user credentials on basis of user provided data
     * @return bool
     */


    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
                case "normal_registration":
                $this->setPassword($this->security->xss_clean($this->password));
                $this->setUserName($this->security->xss_clean($this->user_name));
                $this->setRoleId($this->security->xss_clean($this->role_id));
                break;
            case "social_registration":
                $this->setUserId($this->security->xss_clean($this->user_id));
                $this->setSocialId($this->security->xss_clean($this->social_id));
                $this->setToken($this->security->xss_clean($this->token));
                $this->setProvider($this->security->xss_clean($this->provider));
                break;

            case'get_email': {
                $this->setUserName($this->security->xss_clean($this->getUserName()));
                $this->setToken($this->security->xss_clean($this->getToken()));
            }
                break;

             case 'information':{
                $this->setTanNo($this->security->xss_clean($this->getTanNo()));
                $this->setTinNo($this->security->xss_clean($this->getTinNo()));
                $this->setPanNo($this->security->xss_clean($this->getPanNo()));
                $this->setExciseNo($this->security->xss_clean($this->getExciseNo()));
                $this->setServicesTaxNo($this->security->xss_clean($this->getServicesTaxNo()));
             }
                   break;   
            default:
                break;
        }

    }

    /**
     * return user data
     * @return array
     */
    public function getUserData()
    {
        $data= $this->db->where('chawri_users_username',$this->user_name)->get('chawri_users')->result_array();

           return $data;


    }

    public function isSocialRegistered()
    {
        return $this->db->where(array('chawri_users_username' => $this->user_name, 'chawri_users_provider' => $this->provider))->select('chawri_users_id')->get('chawri_users')->result_array() ? true : false;
    }

    public function isNormalRegistered()
    {
        return $this->db->where(array('chawri_users_username' => $this->user_id))->select('chawri_users_id')->get('chawri_users')->result_array() ? true : false;
    }

    public function getUsers()
    {
        switch (func_get_arg(0)) {
            /*returns an array og users Uid and Email*/
            case 'UidEmail': {
                $user1 = array();
                $users = $this->db->select('chawri_users_id,chawri_users_username')->get('chawri_users')->result_array();
                foreach ($users as $user) {
                    $user1[$user['chawri_users_id']] = $user['chawri_users_username'];
                }
                return $user1;
                break;
            }
            default:
                break;
        }
    }


    public function forgotPwd()
    {
        switch (func_get_arg(0)) {
            case'get_email': {

                  $cont=$this->db->where('chawri_users_username',$this->user_name)->select('chawri_users_id')->get('chawri_users');
                  $cont1=$this->db->where('chawri_sellers_email',$this->user_name)->select('chawri_sellers_id')->get('chawri_sellers');
                if($cont->num_rows()){
                   return true;
                  }
                 elseif ($cont1->num_rows()) {
                   return true;
                  }
                  return false;

               /* $this->db->where('chawri_users_username',$this->getUserName())->select(array('chawri_users_id'))->get('chawri_users')->result_array() ? true : false;*/
                break;
            }
            case'forgot': {
                $data = [
                    'chawri_forgot_pwd_email' => $this->getUserName(),
                    'chawri_forgot_pwd_token' => $this->getToken()
                ];
                return $this->db->insert('chawri_forgot_pwd', $data) ? true : false;
            }
            case'update_pass': {
                $this->getPassword();
                $username = $this->session->userdata('username');
                $this->session->unset_userdata('username');
                 $this->db->where('chawri_users_username',$username)->update('chawri_users',['chawri_users_password'=>$this->getPassword()]);
               if($this->db->affected_rows()==0){
                         $this->db->where('chawri_sellers_email',$username)->update('chawri_sellers',['chawri_sellers_password'=>$this->getPassword()]);
                         if($this->db->affected_rows()==0){
                            return false;
                         }else{
                     return true;
                       }
                    }
                    else{
                    return true;
                }


            }
        }

    }

    public  function  getEmail()
        {


            $token = $this->session->userdata('token');

            $email = $this->db->where('chawri_forgot_pwd_token', $token)->select('chawri_forgot_pwd_email')->get('chawri_forgot_pwd')->result_array();
            return $email;
        }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSocialId()
    {
        return $this->social_id;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    public function insertToken(){
        return $this->db->where('chawri_users_id',$this->getUserId())->update('chawri_users',[
           'chawri_users_token'=>$this->getToken()
        ])?true:false;
    }
    public function verifyEmail(){

        $this->db->where('chawri_users_token',$this->getToken())->update('chawri_users',['chawri_users_status'=>'1']);
       if($this->db->affected_rows()){
            $this->db->where('chawri_users_token',$this->getToken())->update('chawri_users',[
               'chawri_users_token'=>NULL]);
           return true;
       }else{

           return false;
       }




    }
    public function isActive(){
    $query=$this->db->where('chawri_users_username',$this->getUserName())->select(array('chawri_users_status'))->get('chawri_users');
  

       if(isset($this->db->where('chawri_users_username',$this->getUserName())->select(array('chawri_users_status'))->get('chawri_users')->result_array()[0]['chawri_users_status'])){

           return true;
       }
        elseif(isset($this->db->where('chawri_sellers_email',$this->getUserName())->select(array('chawri_sellers_status'))->get('chawri_sellers')->result_array()[0]['chawri_sellers_status'])){

            return true;
        }
        else {
            return false;
        }


    }

   public function removeToken(){
       $token = $this->session->userdata('token');
       return $this->db->where('chawri_forgot_pwd_token',$token)->delete('chawri_forgot_pwd')?true:false;
   }


    public function usersViews(){

       $data = $this->db->query("select * from chawri_users   join chawri_profiles on chawri_users.chawri_users_id=chawri_profiles.chawri_profiles_id")->result_array();

        return $data;
    }


    public function checkUser(){

      


$query=$this->db->where(array('chawri_users_username'=>$this->getUserName()))->select(array('chawri_users_password'))->get('chawri_users');
$q=$query->result();
if(empty($q)){

return false;
}

      if( password_verify($this->getPassword(), $query->result()[0]->chawri_users_password)){


            return true;
        }

        return false;
    }

    public function getUpdateUsers(){
      return $data=$this->db->where('chawri_users_id',$this->session->userdata['user_data'][0]['users_id'])->get('chawri_users')->result_array();
    }


    public function update(){


        $data = [
                    'chawri_users_fname' => $this->fname,
                    'chawri_users_lname' => $this->lname,
                    'chawri_users_phone' => $this->phone

                ];
                return $this->db->where('chawri_users_id',$this->session->userdata['user_data'][0]['users_id'])->update('chawri_users',$data)?true:false;
    }

    public function contact (){



        $data = [
                    'chawri_contacts_name' => $this->fname,
                    'chawri_contacts_email' => $this->user_name,
                    'chawri_contacts_query' => $this->contact_query,
                    'chawri_contacts_mobile'=> $this->mobile

                ];

               return $this->db->insert('chawri_contacts',$data)?true:false;


    }

    public function uploadReceipt(){
         $data = [
                    'chawri_products_orders_receipt_details' => $this->file,
                    
                   

                ];
                
              $this->db->where('chawri_products_orders_buyer_id',$this->session->userdata['user_data'][0]['users_id']);
                    $this->db->where('chawri_products_orders_id',$this->order_id);
                   return $this->db->update('chawri_products_orders',$data)?true:false;
  
    }
     public function getCounter(){
        $value=0;
      $this->db->from('chawri_users');
      $query = $this->db->get();
      $buyer = $query->num_rows();

      $this->db->from('chawri_sellers');
      $query1 = $this->db->get();
      $sellers = $query1->num_rows();

      $count=$buyer+ $sellers;


     $this->db->select('SUM(chawri_products_quantity_on_offer) as score');

     $q = $this->db->get('chawri_products');
     $row=$q->row();
     $score=$row->score;


      $data = array('count' => $count,'products' => $score );



        return $data;
     }

public function information(){
    $this->_validate('information');
    $data = [
        'chawri_users_pan_no'          =>$this->getPanNo(),
        'chawri_users_tin_no'          =>$this->getTinNo(),
        'chawri_users_tan_no'          =>$this->getTanNo(),
        'chawri_users_services_tax_no' =>$this->getServicesTaxNo(),
        'chawri_users_excise_no'       =>$this->getExciseNo()

     ];
     $this->db->where('chawri_users_id',$this->session->userdata['user_data'][0]['users_id']);
   return $this->db->update('chawri_users',$data)?true:false;

}

public function getInformation(){

     $this->db->where('chawri_users_id',$this->session->userdata['user_data'][0]['users_id']);
    return $this->db->get('chawri_users')->result_array();
}


    public function showState(){

        $data= $this->db->get('chawri_states')->result_array();

        return $data;
    }
}