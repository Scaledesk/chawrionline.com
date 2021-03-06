<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/12/2015
 * Time: 5:48 PM
 */
class Sellers extends MX_Controller{


    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        $this->load->Model('users/Mdl_users');
        $this->load->Model('Mdl_sellers');
    }



    public function index(){



      if($this->session->has_userdata('user_data')){

        redirect(base_url('users/home'));
    }
    else{

         if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $this->_register($this->input->post());
        }
        else{
            $data['state']=$this->showStates();
            $this->load->view('users/header/header');
            $this->load->view('register',$data);
            $this->load->view('users/header/footer');
        }
    
    }
    
    }


   public function home(){
   if(islogin()){
   $data['counter']=$this->Mdl_users->getCounter();
    $this->load->view('users/header/header',$data);
     $this->load->view('users/body',$data);
     $this->load->view('users/header/footer');
     }

          else{
            redirect(base_url('users/home'));
          }
   }

 public function homeSeller(){
 if(islogin()){
  $data['counter']=$this->Mdl_users->getCounter();
     $data['categories'] = $this->Mdl_users->getCategories();
    $this->load->view('users/header/header_seller',$data);
     $this->load->view('users/body');
     $this->load->view('users/header/footer');
     }

          else{
            redirect(base_url('users/home'));
          }
   }
public function showProducts(){
if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='sellers'){
    $this->load->view('users/header/header_seller');
    $data['data']=$this->Mdl_sellers->showProducts();
    $this->load->view('products/table_sellers',$data);
     $this->load->view('users/header/footer');
      }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
}

    private function _register($data)
    {
    
       $this->Mdl_sellers->setData('register',$data['user_name_email'],$data['password'],$data['company_name'],
            $data['address'],$data['state'],$data['pin'],$data['phone'],$data['landline'],$data['alternet_email']);

         if($data['password']==$data['confirm_password']){

     if ($this->Mdl_sellers->chechSellers()) {
          setInformUser('error','Email already exists. Kindly try another Email');
          redirect('sellers');
     }
     else{
         if($this->Mdl_sellers->registration('registration')){

            if($this->sendMail()){
                 $this->Mdl_sellers->insertToken();
                 setInformUser('success','Please Pay Registration amount and wait for Admin Approval for Account Activation');
                  redirect('sellers');
                
            }else{
                echo 'Account registered but email not send.';
            }
        };
    }
}
    else{

          setInformUser('error','Password not match. Kindly try same password');
         redirect('sellers');
    }
   
    }

    public  function sendMail()
    {
        $token = $this->createToken();
        $this->email->from('noreply@chawri.com', 'Chawri ');
        $this->email->to($this->Mdl_sellers->getSellersEmail());

        $this->email->subject('Email Activation');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Please Activate your account</div>
                           <br/>
                           <a href="'.base_url().'sellers/verifyEmail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
        $this->Mdl_sellers->setData('token',$token);
        return $this->email->send()?true:false;
       
    }
    public function verifyEmail(){


        $token=$this->input->post_get('tqwertyuiasdfghjzxcvbn');
        $this->Mdl_sellers->setData('token',$token);
        $this->Mdl_sellers->verifyEmail()?setInformUser('success',"Email verified successfully"):setInformUser('error',"Your token has expired");
        redirect('sellers/home');
    }



    public  function  createToken()
    {
        $a=rand(999999999999,9999999999999999);
        $active_token = "chawri".$a;
        $active_token = password_hash($active_token, PASSWORD_DEFAULT);
        return $active_token;
    }

    public function profile(){
    if(islogin()){
        $data = $this->input->post();
        $this->Mdl_sellers->setData('profile',$this->session->userdata['user_data'][0]['users_id'],$data['tin_no'],$data['pan_no'],$data['excise_no'],
            $data['services_tax_no'],$data['tan_no'],$data['cform']
        );


        if($this->Mdl_sellers->profile($data)){


               // echo "your account successfully Update";

                  setInformUser('success','Your Account successfully Update');
                redirect(base_url().'sellers/account_infomation');

        }
        else{
           // echo "your account not successfully Update";
               setInformUser('error','Your Account not Successfully  Update . Kindly try Again' );
                redirect(base_url().'sellers/showProfile');
        }
        }

          else{
            redirect(base_url('users/home'));
          }

    }
    public function showProfile(){
    if(islogin()){
         if( $this->session->userdata['user_data'][0]['role']=='sellers'){
         $data['profile_data']=$this->Mdl_sellers->getProfile();
        $this->load->view('users/header/header_seller');
        $this->load->view('profile_show',$data);
        $this->load->view('users/header/footer');
         }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
    }
 public function account_infomation(){
    if(islogin()){
         if( $this->session->userdata['user_data'][0]['role']=='sellers'){
         $data['profile_data']=$this->Mdl_sellers->getProfile();
       /* echo $data['profile_data'][0]['chawri_sellers_services_tax_no'];
*/
      if(!$data['profile_data'][0]['chawri_sellers_services_tax_no']==''){
        $this->load->view('users/header/header_seller');
        $this->load->view('update_account',$data);
        $this->load->view('users/header/footer');
        }else{
        redirect(base_url('sellers/updatProfile'));
      }
         }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
    }
public function updatProfile(){
    if(islogin()){
         if( $this->session->userdata['user_data'][0]['role']=='sellers'){
      $data['profile_data']=$this->Mdl_sellers->getProfile();


        $this->load->view('users/header/header_seller');
        $this->load->view('profile',$data);
        $this->load->view('users/header/footer');
      
         }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
    }
     public function showStates(){

       $data= $this->Mdl_sellers->getState();

       return $data;
    }


    public function getProfile(){
          if(islogin()){
        $data['profile_data']=$this->Mdl_sellers->getProfile();
        $this->load->view('users/header/header_seller'); 
        $this->load->view('register_update',$data);
        $this->load->view('users/header/footer');
        }

          else{
            redirect(base_url('users/home'));
          }

    }
    public function updateGetProfile(){
    if(islogin()){
        $data=$this->input->post();

         $this->Mdl_sellers->setData('register_update',$data['company_name'],
            $data['address'],$data['state'],$data['pin'],$data['phone'],$data['landline']
           );

         if($this->Mdl_sellers->updateGetProfile()){

                setInformUser('success','Your General Information successfully Update');
                redirect(base_url().'sellers/getProfile');
         }
         else{
         setInformUser('error','Your Account not successfully Update. Kindly try Again');
                redirect(base_url().'sellers/getProfile');
         }
          }

          else{
            redirect(base_url('users/home'));
          }
    }


    public function aboutUsSellers(){
      if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='sellers'){
      $this->load->view('users/header/header_seller');
    $this->load->view('users/about_us');
    $this->load->view('users/header/footer');
     }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
          

  }
  public function howItWorkSellers(){
    if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='sellers'){
      $this->load->view('users/header/header_seller');
    $this->load->view('users/how_it_work');
    $this->load->view('users/header/footer');
     }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }

  }

public function manageOrder(){
  if(islogin()){
 if( $this->session->userdata['user_data'][0]['role']=='sellers'){
    $data['cancel']=$this->Mdl_sellers->getCancel(); 
    $data['conform']=$this->Mdl_sellers->getPending(); 
    $data['completed']=$this->Mdl_sellers->getcompleted(); 
    $data['products']=$this->Mdl_sellers->approvedProducts(); 
    $this->load->view('users/header/header_seller');
    $this->load->view('approvedProducts',$data); 
    $this->load->view('users/header/footer');
     }
    else{

       redirect('users/home'); 
    }
}

          else{
            redirect(base_url('users/home'));
          }
}


 

public function conform($id){
  if(islogin()){
    if($data['buyer']=$this->Mdl_sellers->conform($id)){

       /* print_r($data['buyer']);*/
         $name=$data['buyer'][0]['chawri_users_fname'];
         $lname=$data['buyer'][0]['chawri_users_lname'];
         $email=$data['buyer'][0]['chawri_users_username'];

        $admin_mail='noreply@chawri.com';

        $this->email->from('noreply@chawri.com', 'Chawri');
        $this->email->to($email);
        /*$this->email->to($this->Mdl_users->getUserName());*/

        $this->email->subject('Notifiction');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Pay Amount'.$name .''.$lname.'</div>');
      /*die();*/
        if($this->email->send()){
               setInformUser('success','Products Successfully Conform .');
                redirect(base_url().'sellers/manageOrder');
            }else{
                setInformUser('error','Some Error Occur  . Try Again');
                redirect(base_url().'sellers/manageOrder');
            }
    }
    else{
   setInformUser('error','Some Error Occur . Kindly try Again');
                redirect(base_url().'sellers/manageOrder');

    }
    }

          else{
            redirect(base_url('users/home'));
          }
}





public function dispatched($id,$sellers_id,$buyer_id){
  if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='sellers'){
    if($data['email']=$this->Mdl_sellers->dispatched($id,$sellers_id,$buyer_id)){
      
     $buyer_email= $data['email']['buyer_email'];
     $sellers_email= $data['email']['sellers_email'];


      $this->email->from('noreply@chawri.com', 'Chawri');
        $this->email->to($buyer_email);
       
        $this->email->subject('Dispatched order');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;"> chawrionline.com.</div>');
        if($this->email->send()){


          $this->email->from('noreply@chawri.com', 'Chawri');
         $this->email->to($sellers_email);
       
        $this->email->subject('Dispatched order');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">  chawrionline.com. .</div>');
        if($this->email->send()){


         setInformUser('success','Dispatched Successfully');
        redirect('sellers/manageOrder');



}


   }
   

    }
    else{
         setInformUser('error','Some Error Occur.  Please Try Again');
        redirect('sellers/manageOrder');
    }
     }
    else{

       redirect('users/home'); 
    }
    }

          else{
            redirect(base_url('users/home'));
          }
}
 
public function extensionNot($id){
if(islogin()){
if ($this->Mdl_sellers->extensionNot($id)) {
                setInformUser('success','Order move to on going Tabe .');
                redirect(base_url().'sellers/manageOrder');

}else{
        setInformUser('error','Some Error Occur.  Please Try Again');
        redirect('sellers/manageOrder');

}



}else{
   redirect(base_url('users/home'));
}


}



}