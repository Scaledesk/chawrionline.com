<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Products extends  MX_Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_products'); 
        /*$this->load->Model('Mdl_categories');*/ 
    }

    public function index(){
       if(islogin()){
      if( $this->session->userdata['user_data'][0]['role']=='sellers'){
        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $this->_insertProducts($this->input->post());
        }
        else{
            $data['categories']=$this->Mdl_products->showCategories();
            $this->load->view('users/header/header_seller');
            $this->load->view('register',$data);
            $this->load->view('users/header/footer');
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
    private function _insertProducts($data)
    {
    if(islogin()){
       
        $post_data=$this->input->post();
        $data=array();
        for($i=0;$i<count($post_data['products_name']);$i++){
            array_push($data,[
                'chawri_products_name'=>$post_data['products_name'][$i],
                'chawri_products_brand_name'=>$post_data['products_brand_name'][$i],
                'chawri_products_cenvat_amount'=>$post_data['products_cenvat_amount'][$i],
                'chawri_products_manufacturer'=>$post_data['products_manufacturer'][$i],
                'chawri_products_grain'=>$post_data['products_grain'][$i],
                'chawri_products_packets_per_bundle'=>$post_data['packets_per_bundle'][$i],
                'chawri_products_packing'=>$post_data['products_packing'][$i],
                'chawri_products_quantity_on_offer'=>$post_data['products_quantity_on_offer'][$i],
                'chawri_products_rate'=>$post_data['products_rate'][$i],
                'chawri_products_sheets_per_packet'=>$post_data['products_sheets_per_packet'][$i],
                'chawri_products_size_w'=>$post_data['products_size'][$i],
                'chawri_products_size_h'=>$post_data['products_size_one'][$i],
                'chawri_products_substance'=>$post_data['products_substance'][$i],
                'chawri_products_thickness'=>$post_data['products_thickness'][$i],
                'chawri_products_weight'=>$post_data['products_weight'][$i],
                'chawri_products_categories'=>$post_data['categories'][$i],
                'chawri_products_reel_sheet'=>'sheet',
                'chawri_sellers_id' =>$this->session->userdata['user_data'][0]['users_id']
            ]);
        }
       /* echo '<br/>';
        print_r($data);
        die;
        $this->Mdl_products->setData('insert',1,$this->input->post());*/

       /* $this->Mdl_products->setData('insert',1,$data['products_brand_name'],$data['products_name'],$data['products_cenvat_amount'],
            $data['products_manufacturer'],$data['products_grain'],$data['packets_per_bundle'],$data['products_packing'],
            $data['products_quantity_on_offer'],$data['products_rate'],
            $data['products_sheets_per_packet'],$data['products_size'],$data['products_substance'],$data['products_thickness']);*/



        if($this->Mdl_products->insertProduct($data)){


            setInformUser('success',"Product's Information Was Added Successfully .");
           redirect('sellers/showProducts');
        }
        else{

            setInformUser('error',"Product's Information Not Added. Please Try Again. ");
           redirect('sellers/showProducts');
        }
        }

          else{
            redirect(base_url('users/home'));
          }
    }

public function getProducts($id){

	if(!isset($_SESSION['user_data'])){
	  setInformUser('success',"Please Login/Register with Us.");
  	redirect('users');
  	}
  	else{

   if( $this->session->userdata['user_data'][0]['role']=='buyer'){

  $data['data']=$this->Mdl_products->getProducts($id);
  $data['cform']=$this->Mdl_products->cform($data['data'][0]['chawri_sellers_id']);

  
  $this->load->view('users/header/header_buyer');
  $this->load->view('single_products',$data);
  $this->load->view('users/header/footer');
   }
    else{

       redirect('users/home'); 
    }
    }
   
    

}
    public  function showProducts(){
    if(islogin()){
 if( $this->session->userdata['user_data'][0]['role']=='buyer'){
        $data['data']=$this->Mdl_products->showProducts();
        $this->load->view('users/header/header_buyer');
        //$this->load->view('products_show',$data);
        $this->load->view('table',$data);
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

public function showUpdate($id){
      if(islogin()){
       $data['categories']=$this->Mdl_products->showCategories();
        $data['data']=$this->Mdl_products->showUpdate($id);
        $this->load->view('users/header/header_seller');
        $this->load->view('update',$data);
        $this->load->view('users/header/footer');
        }

          else{
            redirect(base_url('users/home'));
          }
}

public function update($id){
    if(islogin()){
$data=$this->input->post();

 $this->Mdl_products->setData('update',$this->session->userdata['user_data'][0]['users_id'],$id,
            $data['products_brand_name'],
            $data['products_name'],
            $data['products_manufacturer'],
            $data['products_substance'],
            $data['products_thickness'],
            $data['products_size'],
            $data['products_size_one'],
            $data['products_grain'],
            $data['products_sheets_per_packet'],
            $data['packets_per_bundle'],
            $data['products_weight'],
            $data['products_quantity_on_offer'],
            $data['products_packing'],
            $data['products_rate'],
            $data['products_cenvat_amount'],
            $data['categories']
            );


        if($this->Mdl_products->update($data)){


            setInformUser('success',"Product's Information Was updated Successfully .");

                  redirect('sellers/showProducts');
        }
        else{

           setInformUser('error',"Product's Information Not update. Please Try Again. ");
           redirect('sellers/showProducts');
        }
         }

          else{
            redirect(base_url('users/home'));
          }


}


public function productsAdd(){
    if(islogin()){
     $this->load->view('users/header/header_seller');
      $this->load->view('register');
      $this->load->view('users/header/footer');
       }

          else{
            redirect(base_url('users/home'));
          }
}



public function productsReel(){
      if(islogin()){
     $this->load->view('users/header/header_seller');
      $this->load->view('add_products');
      $this->load->view('users/header/footer');
       }

          else{
            redirect(base_url('users/home'));
          }
}

public function showForm(){
       if(islogin()){
     $post_data=$this->input->post();
    //echo $post_data['reel'];

     if($post_data['reel']=='sheet'){
         $data['categories']=$this->Mdl_products->showCategories();
         $this->load->view('users/header/header_seller');
         $this->load->view('products_form',$data);
         $this->load->view('users/header/footer');

     }
     else{
         $data['categories']=$this->Mdl_products->showCategories();
         $this->load->view('users/header/header_seller');
         $this->load->view('reel_products_form',$data);
         $this->load->view('users/header/footer');
     }
     }

          else{
            redirect(base_url('users/home'));
          }

}

  public function productReel(){

 if(islogin()){

      $post_data=$this->input->post();
   
                    $data_set=array();
                    /*echo count($post_data['products_name']);
                    die();*/
                    for($i=0;$i<count($post_data['products_name']);$i++){
                      //echo  $post_data['products_manufacturer'][$i];
                        array_push($data_set,[
                            'chawri_products_name'=>$post_data['products_name'][$i],
                            'chawri_products_brand_name'=>$post_data['products_brand_name'][$i],
                            'chawri_products_cenvat_amount'=>$post_data['products_cenvat_amount'][$i],
                            'chawri_products_manufacturer'=>$post_data['products_manufacturer'][$i],
                            'chawri_products_grain'=>$post_data['products_grain'][$i],

                            'chawri_products_packing'=>$post_data['products_packing'][$i],
                            'chawri_products_quantity_on_offer'=>$post_data['products_quantity_on_offer'][$i],
                            'chawri_products_rate'=>$post_data['products_rate'][$i],

                            
                            'chawri_products_size_w'=>$post_data['products_size'][$i],
                            'chawri_products_size_h'=>$post_data['products_size_one'][$i],
                            'chawri_products_substance'=>$post_data['products_substance'][$i],
                            'chawri_products_thickness'=>$post_data['products_thickness'][$i],
                            'chawri_products_categories'=>$post_data['categories'][$i],
                            'chawri_products_reel_sheet'=>'reel',
                            'chawri_sellers_id' => $this->session->userdata['user_data'][0]['users_id']
                        ]);
                    }



        if($this->Mdl_products->insertProductReel($data_set)){


              setInformUser('success',"Product's Information Was Added Successfully .");
           redirect('sellers/showProducts');
        }
        else{

             setInformUser('error',"Product's Information Not Added. Please Try Again. ");
           redirect('sellers/showProducts');
        }
        }

          else{
            redirect(base_url('users/home'));
          }
  }


public function singleProducts(){
 if(islogin()){
 $data=$this->input->post();
 

/*echo $data['sheet'];
 print_r($data);
die();*/

        $this->Mdl_products->setData('insert',$this->session->userdata['user_data'][0]['users_id'],$data['products_brand_name'],$data['products_name'],$data['products_cenvat_amount'],
            $data['products_manufacturer'],$data['products_grain'],$data['packets_per_bundle'],$data['products_packing'],
            $data['products_quantity_on_offer'],$data['products_rate'],
            $data['products_sheets_per_packet'],$data['products_size'],$data['products_size_one'],$data['packets_weight'],$data['products_substance'],$data['products_thickness'],$data['categories']);


        if($this->Mdl_products->singleProducts($data['sheet'])){


             setInformUser('success',"Product's Information Was Added Successfully .");
           redirect('sellers/showProducts');
        }
        else{

            setInformUser('error',"Product's Information Not Added. Please Try Again. ");
              redirect('sellers/showProducts');
        }







        }

          else{
            redirect(base_url('users/home'));
          }

}


public function delete($id){
if(islogin()){
   if($this->Mdl_products->delete($id)){

       setInformUser('success',' Products Deleted successfully');
        redirect('sellers/showProducts');
   }
   else{
     setInformUser('error','Products Delete not successfully');
      redirect('sellers/showProducts');
   }
   }

          else{
            redirect(base_url('users/home'));
          }
}



public function buyNow($id){
if(islogin()){
$data['buyNow']=$this->input->post();
/*print_r($data);
die;*/
/*echo $id;
die;*/
/*$this->Mdl_products->setData('buy',$data['qty'],$data['description'],$id,$data['cform']);*/
 /* if($this->Mdl_products->buyNow()){*/

        $data['order']=$this->Mdl_products->getOrderDetails($id);

       /* print_r($data['order']);
        die;*/
        $data['seller'] = $this->Mdl_products->getSellersDetails($id);
       
/*        print_r($data['cform']);
        die;*/
         $this->load->view('users/header/header_buyer');
         $this->load->view('payment',$data);
         $this->load->view('users/header/footer');


 /* }
  else{

    setInformUser('error',"Some error Occurred! Kindly retry ");
  }*/

}

          else{
            redirect(base_url('users/home'));
          }
}

public function extension($id){
if(islogin()){
 $data=$this->input->post();


  $this->Mdl_products->setData('extension',$data['extension'],$data['date'],$id);
  if( $this->Mdl_products->extension()){
         setInformUser('success',"Extension inserted Successfully. ");
         redirect(base_url().'sellers/manageOrder'); 
  }
else{
        setInformUser('error',"Some error Occurred! Kindly retry ");
        redirect(base_url().'sellers/manageOrder');
}
}

          else{
            redirect(base_url('users/home'));
          }
}

public function showOrder(){
if(islogin()){
if( $this->session->userdata['user_data'][0]['role']=='buyer'){
 $data['approvel']= $this->Mdl_products->approvel();
 $data['conform']= $this->Mdl_products->pending();
 $data['cancel']= $this->Mdl_products->cancel();
 $data['completed']= $this->Mdl_products->completed();
        $this->load->view('users/header/header_buyer');
         $this->load->view('order_table',$data);
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
public function placeOrder(){
if(islogin()){
  $data=$this->input->post();
 
/* print_r($data);*/
/*echo $data['qry'];*/

  $data['sellers']=$this->Mdl_products->getSellers($data['sellers_id']);
/**/
 $email=$data['sellers'][0]['chawri_sellers_email'];

$this->Mdl_products->buyNow($data['total_cost'],$data['sellers_id'],$data['products_id'],$data['description'],$data['qry'],$data['cform'],$data['tin_no']);

        $this->email->from('noreply@chawri.com', 'Chawri');
        $this->email->to($email);
       
        $this->email->subject('order placed');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;"> Thsi is to notify you that an order has beeen placed for your product listed on chawrionline.com.</div>');
        if($this->email->send()){


          $this->email->from('noreply@chawri.com', 'Chawri');
         $this->email->to($this->session->userdata['user_data'][0]['users_email']);
       
        $this->email->subject('order placed');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;"> Thsi is to notify you that your order has beeen placed on chawrionline.com. Please upload the payment slip within 24hrs or your order will be cancelled.</div>');
        if($this->email->send()){
         setInformUser('success'," Order Place Successfully.  Please check your Email.    Admin Approval Pending.");
          redirect('products/showOrder'); 
        }


         
        }
      else{
        setInformUser('error',"Some error Occurred! Kindly retry ");
    redirect('products/showOrder');
      }
      }

          else{
            redirect(base_url('users/home'));
          }  

}

public function orderApproved ($id){
if(islogin()){
if($this->Mdl_products->orderApproved($id)){


 setInformUser('success',"Product buy  Successfully ");
    redirect('products/showOrder');
}
else{
   setInformUser('error',"Some Error Occurred ");
    redirect('products/showOrder');
}
}

          else{
            redirect(base_url('users/home'));
          }
}

public function received($id){
if(islogin()){
  if($sellers_email=$this->Mdl_products->received($id)){

  /* echo $sellers_email;
 die;*/
       $this->email->from('noreply@chawri.com', 'Chawri');
         $this->email->to($sellers_email);
       
        $this->email->subject('Received Order');
       
         $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;"> Your order has been successfully Received. As per norms you have 4 Days to Raise any Issue regarding the Order </div>');
        if($this->email->send()){
         setInformUser('success',"Product Received Successfully ");
           redirect('products/showOrder');
        }
        else{
          setInformUser('error',"Some Error Occurred ");
           redirect('products/showOrder');
        }



     

  }else{
    setInformUser('error',"Some error Occurred! Kindly retry ");
    redirect('products/showOrder');
  }
  }

          else{
            redirect(base_url('users/home'));
          }
}

public function orderCancel($id){
if(islogin()){
if($this->Mdl_products->orderCancel($id)){

 setInformUser('success',"Product Cancel Successfully ");
  redirect('products/showOrder');

}
else{
   setInformUser('error',"Some error Occurred! Kindly retry ");
    redirect('products/showOrder');
}
}

          else{
            redirect(base_url('users/home'));
          }

}

 public function uploadExcel(){
 if(islogin()){
  
        $this->load->view('users/header/header_seller');
        $this->load->view('excel');
        $this->load->view('users/header/footer');
 
   }

          else{
            redirect(base_url('users/home'));
          }
}



 
public function import(){
     if(islogin()){
   
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $ci=CI::get_instance();
            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'csv';
            $config['max_size']             = 1000;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            if ( ! $ci->upload->do_upload('name'))
            {
                $error = array('error' => $ci->upload->display_errors());
                setInformUser('error', $error['error'].' please import CSV file formate only');
               
                redirect('products');
                

            }
            else
            {
                $data = array('upload_data' => $ci->upload->data());
                $file=$data['upload_data']['file_name'];
                if($this->Mdl_products->import($file)){

                    //after succesfully uploaded code goes here
                     setInformUser('success',' Import Products has been Successfully ');
                     redirect('products');
                    //die;

                }}

              }
               else {
               redirect('users/home');
            }

       
          }
        else {
               redirect('users/home');
            }
   
 }



public function extension_buyer($id){
if(islogin()){
if ($this->Mdl_products->extension_buyer($id)) {

                setInformUser('success','Extension Successfully added .');
                redirect(base_url('products/showOrder'));

}else{
        setInformUser('error','Some Error Occur.  Please Try Again');
        redirect(base_url('products/showOrder'));

}



}else{
   redirect(base_url('users/home'));
}


}


public function raiseIssue($id){
  if (islogin()) {
     $data=$this->input->post();
  if($this->Mdl_products->raiseIssue($data['raiseIssue'],$id)){
   setInformUser('success','your issue has been raised.');
 redirect(base_url('products/showOrder'));
  }
  else{
    setInformUser('error','Some Error Occur.  Please Try Again');
    redirect(base_url('products/showOrder'));
  }

  }
  else{
    redirect(base_url('users/home'));
  }
}
}
