<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 11/2/15
 * Time: 7:38 PM
 */

class Admin extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_admin');
       //  $this->load->Model('Mdl_users');
       /* $this->load->Model('sellers/Mdl_sellers');*/
    }
    /**
     * this is the index method the landing page for all operations
     */
    public function index(){

           if(islogin()){
            if( $this->session->userdata['user_data'][0]['role']=='admin'){
             
          if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

          }
            else{
             /* $data['counter']=$this->Mdl_users->getCounter();*/
              $data['countSellers']=$this->Mdl_admin->countSellers();
                  $data['countBuyers']=$this->Mdl_admin->countBuyers();
                   $data['countProducts']=$this->Mdl_admin->countProducts();
             $this->load->view('header');
             $this->load->view('dashboard',$data);
             $this->load->view('footer');

            }
          }
          else{
            redirect(base_url('users/home'));
          }
          }

          else{
            redirect(base_url('users/home'));
          }

  }


  public function showProducts(){
      if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='admin'){
      $data['cancel']=$this->Mdl_admin->cancel();
      $data['complete']=$this->Mdl_admin->complete(); 
      $data['approve']=$this->Mdl_admin->approve(); 
      $data['cancel_buyer']=$this->Mdl_admin->cancel_buyer(); 
      /*print_r($data['cancel_buyer']);
      die;*/
      $data['panding_products']=$this->Mdl_admin->showProducts();

             $this->load->view('header');
             $this->load->view('panding_products',$data);
             $this->load->view('footer');

              }
    else{

       redirect('users/home'); 
    }
    }
     else{
            redirect(base_url('users/home'));
          }
  }

  public function approval($id){

 if(islogin()){


/*print_r($commission);*/

$buyer_email=$this->input->post('buyer_email');

    if($this->Mdl_admin->approval($id)){


          $this->email->from('noreply@chawri.com', 'Chawri');
         $this->email->to($buyer_email);
       
        $this->email->subject('Products Approved By Admind ');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">  chawrionline.com. </div>');
        if($this->email->send()){

           setInformUser('success','Admin Approved.');
          redirect('products/showOrder'); 
        }

    }
    else{


          setInformUser('error','Products  not Approved  successfully');
          redirect('admin/showProducts');
    }
   }
else{
            redirect(base_url('users/home'));
          }
  }

public function home(){
 if(islogin()){
            /* $data['counter']=$this->Mdl_users->getCounter();*/
              if( $this->session->userdata['user_data'][0]['role']=='admin'){
               $data['countSellers']=$this->Mdl_admin->countSellers();
                  $data['countBuyers']=$this->Mdl_admin->countBuyers();
                   $data['countProducts']=$this->Mdl_admin->countProducts();
             $this->load->view('header');
             $this->load->view('dashboard',$data);
             $this->load->view('footer');
              }
    else{

       redirect('users/home'); 
    }
    }
else{
            redirect(base_url('users/home'));
          }
}


  public function sellers(){
   if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='admin'){
  $data['selles']=$this->Mdl_admin->getSellers();
             $this->load->view('header');
             $this->load->view('table_sellers',$data);
             $this->load->view('footer');
              }
    else{

       redirect('users/home'); 
    }
     }
else{
            redirect(base_url('users/home'));
          }
  }
   public function buyers(){
    if(islogin()){
     if( $this->session->userdata['user_data'][0]['role']=='admin'){
  $data['buyer']=$this->Mdl_admin->getBuyer();
             $this->load->view('header');
             $this->load->view('table_buyer',$data);
             $this->load->view('footer');
              }
    else{

       redirect('users/home'); 
    }
     }
else{
            redirect(base_url('users/home'));
          }
  }



public function activateSeller($id){
 if(islogin()){
  if($this->Mdl_admin->activateSeller($id))
  {
    setInformUser('success','Sellers successfully activated');
    redirect(base_url().'admin/sellers');
  }
  else{
    setInformUser('error','Sellers not activated');
    redirect(base_url().'admin/sellers');
  }
  }
else{
            redirect(base_url('users/home'));
          }
}

public function inActivateSeller($id){
    if(islogin()){
  if($this->Mdl_admin->inActivateSeller($id))
  {
    setInformUser('success','Sellers successfully InActivated');
    redirect(base_url().'admin/sellers');
  }
  else{
    setInformUser('error','Sellers not InActivated');
    redirect(base_url().'admin/sellers');
  }
   }
else{
            redirect(base_url('users/home'));
          }
}

public function activateBuyer($id){
    if(islogin()){
  if($this->Mdl_admin->activateBuyer($id))
  {
    setInformUser('success','Buyers successfully activated');
    redirect(base_url().'admin/buyers');
  }
  else{
    setInformUser('error','Buyers not activated');
    redirect(base_url().'admin/buyers');
  }
   }
else{
            redirect(base_url('users/home'));
          }
}

public function inActivateBuyer($id){
if(islogin()){
  if($this->Mdl_admin->inActivateBuyer($id))
  {
    setInformUser('success','Buyers successfully InActivated');
    redirect(base_url().'admin/buyers');
  }
  else{
    setInformUser('error','Buyers not InActivated');
    redirect(base_url().'admin/buyers');
  }
   }
else{
            redirect(base_url('users/home'));
          }
}


public function decline($id){
  if(islogin()){
         
      
       
    if($this->Mdl_admin->decline($id)){
               setInformUser('success','Order Successfully Decline.');
                redirect(base_url('admin/showProducts'));
    }
    else{
   setInformUser('error','Some Error Occur . Kindly try Again');
                redirect(base_url('admin/showProducts'));

    }
    }

          else{
            redirect(base_url('users/home'));
          }
}
public function complaint (){
  if(islogin()){
 $data['complaint']=$this->Mdl_admin->complaint();
$this->load->view('header');
$this->load->view('complaint',$data);
$this->load->view('footer');
  }
  else{
    redirect(base_url('users/home'));
  }

 }

public function paymentRecipetDownload($id){

$filePath=base_url().$id;

  force_download($filePath, NULL);
}

public function orderDetails($id){
  if (islogin()) {
  
  $data['data']=$this->Mdl_admin->orderDetails($id);

  $this->load->view('header');

  $this->load->view('order_complaint',$data);
  $this->load->view('footer');
  
}
else{
  redirect(base_url('users/home'));
}

}

}
