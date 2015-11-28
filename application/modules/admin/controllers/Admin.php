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


          if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

          }
            else{
             /* $data['counter']=$this->Mdl_users->getCounter();*/
             $this->load->view('header');
             $this->load->view('dashboard');
             $this->load->view('footer');

            }

  }


  public function showProducts(){
     if( $this->session->userdata['user_data'][0]['role']=='admin'){
    $data['panding_products']=$this->Mdl_admin->showProducts();

 /* echo "<pre/>";
    print_r($data['panding_products']);
die();*/
             $this->load->view('header');
             $this->load->view('panding_products',$data);
             $this->load->view('footer');

              }
    else{

       redirect('users/home'); 
    }
  }

  public function approval($id){


$commission=$this->input->post();

/*print_r($commission);*/



    if($this->Mdl_admin->approval($id,$commission['commission'])){


      setInformUser('success','Products Approved  successfully');
      redirect('admin/showProducts');
    }
    else{


          setInformUser('error','Products  not Approved  successfully');
          redirect('admin/showProducts');
    }


  }

public function home(){
            /* $data['counter']=$this->Mdl_users->getCounter();*/
              if( $this->session->userdata['user_data'][0]['role']=='admin'){
             $this->load->view('header');
             $this->load->view('dashboard');
             $this->load->view('footer');
              }
    else{

       redirect('users/home'); 
    }
}


  public function sellers(){
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
   public function buyers(){
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



public function activateSeller($id){

  if($this->Mdl_admin->activateSeller($id))
  {
    setInformUser('success','Sellers successfully activated');
    redirect(base_url().'admin/selles');
  }
  else{
    setInformUser('error','Sellers not activated');
    redirect(base_url().'admin/selles');
  }
}

public function inActivateSeller($id){

  if($this->Mdl_admin->inActivateSeller($id))
  {
    setInformUser('success','Sellers successfully InActivated');
    redirect(base_url().'admin/selles');
  }
  else{
    setInformUser('error','Sellers not InActivated');
    redirect(base_url().'admin/selles');
  }
}




 }
