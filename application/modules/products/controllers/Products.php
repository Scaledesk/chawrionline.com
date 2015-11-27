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
      if( $this->session->userdata['user_data'][0]['role']=='sellers'){
        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $this->_insertProducts($this->input->post());
        }
        else{
            $data['categories']=$this->Mdl_products->showCategories();
            $this->load->view('users/header/header_seller');
            $this->load->view('register',$data);
            $this->load->view('sellers/footer');
        }

         }
    else{

       redirect('users/home'); 
    }
    }
    private function _insertProducts($data)
    {
       /* echo "<pre/>";
        print_r($this->input->post());*/
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
                'chawri_products_size'=>$post_data['products_size'][$i],
                'chawri_products_substance'=>$post_data['products_substance'][$i],
                'chawri_products_thickness'=>$post_data['products_thickness'][$i],
                'chawri_products_weight'=>$post_data['products_weight'][$i],
                'chawri_products_reel_sheet'=>'s',
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

public function getProducts($id){
   if( $this->session->userdata['user_data'][0]['role']=='buyer'){
  $data['data']=$this->Mdl_products->getProducts($id);
  $this->load->view('users/header/header_buyer');
  $this->load->view('single_products',$data);
  $this->load->view('users/header/footer');
   }
    else{

       redirect('users/home'); 
    }

}
    public  function showProducts(){
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

public function showUpdate($id){

        $data['data']=$this->Mdl_products->showUpdate($id);
        $this->load->view('users/header/header_seller');
        $this->load->view('update',$data);
        $this->load->view('users/header/footer');
}

public function update($id){
$data=$this->input->post();
/*echo "<pre/>";
print_r($data);
*/
  // die();
 $this->Mdl_products->setData('update',$this->session->userdata['user_data'][0]['users_id'],$id,
            $data['products_brand_name'],
            $data['products_name'],
            $data['products_manufacturer'],
            $data['products_substance'],
            $data['products_thickness'],
            $data['products_size'],
            $data['products_grain'],
            $data['products_sheets_per_packet'],
            $data['packets_per_bundle'],
            $data['products_weight'],
            $data['products_quantity_on_offer'],
            $data['products_packing'],
            $data['products_rate'],
            $data['products_cenvat_amount']
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


public function productsAdd(){

     $this->load->view('users/header/header_seller');
      $this->load->view('register');
      $this->load->view('users/header/footer');
}



public function productsReel(){

     $this->load->view('users/header/header_seller');
      $this->load->view('add_products');
      $this->load->view('users/header/footer');
}

public function showForm(){

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

  public function productReel(){



      $post_data=$this->input->post();
    /*  echo "<pre/>";
      print_r($post_data);
     die();*/
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

                            'chawri_products_size'=>$post_data['products_size'][$i],
                            'chawri_products_substance'=>$post_data['products_substance'][$i],
                            'chawri_products_thickness'=>$post_data['products_thickness'][$i],
                            'chawri_products_categories'=>$post_data['categories'][$i],
                            'chawri_products_reel_sheet'=>'r',
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


public function singleProducts(){

 $data=$this->input->post();
/* print_r($data);
die();*/
        $this->Mdl_products->setData('insert',$this->session->userdata['user_data'][0]['users_id'],$data['products_brand_name'],$data['products_name'],$data['products_cenvat_amount'],
            $data['products_manufacturer'],$data['products_grain'],$data['packets_per_bundle'],$data['products_packing'],
            $data['products_quantity_on_offer'],$data['products_rate'],
            $data['products_sheets_per_packet'],$data['products_size'],$data['packets_weight'],$data['products_substance'],$data['products_thickness'],$data['categories']);


        if($this->Mdl_products->singleProducts($data)){


             setInformUser('success',"Product's Information Was Added Successfully .");
           redirect('sellers/showProducts');
        }
        else{

            setInformUser('error',"Product's Information Not Added. Please Try Again. ");
              redirect('sellers/showProducts');
        }

}


public function delete($id){

   if($this->Mdl_products->delete($id)){

       setInformUser('success',' Products Deleted successfully');
        redirect('sellers/showProducts');
   }
   else{
     setInformUser('error','Products Delete not successfully');
      redirect('sellers/showProducts');
   }
}



public function buyNow($id){

$data=$this->input->post();
$this->Mdl_products->setData('buy',$data['qty'],$data['description'],$id);
  if($this->Mdl_products->buyNow()){
        $data['order'] = $this->Mdl_products->getOrderDetails();
        $data['seller'] = $this->Mdl_products->getSellersDetails($id);
         $this->load->view('users/header/header_buyer');
         $this->load->view('payment',$data);
         $this->load->view('users/header/footer');


  }
  else{

    setInformUser('error',"Some error Occurred! Kindly retry ");
  }


}

public function extenstion($id){

 $data=$this->input->post();


  $this->Mdl_products->setData('extension',$data['extension'],$data['date'],$id);
  if( $this->Mdl_products->extension()){
         setInformUser('success',"Extension inserted Successfully. ");
         redirect(base_url().'sellers/manageProducts');
  }
else{
        setInformUser('error',"Some error Occurred! Kindly retry ");
        redirect(base_url().'sellers/manageProducts');
}
}

public function showOrder(){
if( $this->session->userdata['user_data'][0]['role']=='buyer'){
 $data['approvel']= $this->Mdl_products->approvel();
$data['conform']= $this->Mdl_products->pending();
$data['cancel']= $this->Mdl_products->cancel();

        $this->load->view('users/header/header_buyer');
         $this->load->view('order_table',$data);
         $this->load->view('users/header/footer');
          }
    else{

       redirect('users/home'); 
    }

}
public function placeOrder(){



  setInformUser('success',"Your order place successfully please check email. ");
    redirect('products/showOrder');
        //
        // $data['approvel']= $this->Mdl_products->approvel();
        // $data['conform']= $this->Mdl_products->pending();
        // $data['cancel']= $this->Mdl_products->cancel();
        //  $this->load->view('users/header/header_buyer');
        //   $this->load->view('order_table',$data);
        //   $this->load->view('users/header/footer');

}


public function orderApproved ($id){

if($this->Mdl_products->orderApproved()){

  redirect('');

}
else{
    redirect('');
}

}

public function orderCancel($id){

if($this->Mdl_products->orderCancel()){

  redirect('');

}
else{
    redirect('');
}


}

  /*public function productsXml(){

    $excelfile=$this->input->post();

		$this->load->libraries('reader.php');
		//include 'reader.php';
    	$excel = new Spreadsheet_Excel_Reader();
   die();
    $excel->read('upload/sample.xls');
    $x=2;
    while($x<=$excel->sheets[0]['numRows']) {

        $products_name = isset($excel->sheets[0]['cells'][$x][1]) ? $excel->sheets[0]['cells'][$x][1] : '';
        $products_brand_name = isset($excel->sheets[0]['cells'][$x][2]) ? $excel->sheets[0]['cells'][$x][2] : '';
        $products_manufacturer = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_substance = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_thickness = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_size = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_grain = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_sheets_per_packet = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $packets_per_bundle = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_weight = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_quantity_on_offer = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_packing = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_rate = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
        $products_cenvat_amount = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';

        // Save details
        $sql_insert="INSERT INTO users_details (id,name,job,email) VALUES ('','$name','$job','$email')";
        $result_insert = mysql_query($sql_insert) or die(mysql_error());

        $x++;
    }

        if($result_insert){

            echo "Successful Insert";
        }
        else {
            echo "Some error occur";
        }
    }
}
}
}
}
}

*/
}
