<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 11/27/2015
 * Time: 4:10 PM
 */
class Categories extends  MX_Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_categories');
    }

public function index(){

    if(islogin()){


	 if( $this->session->userdata['user_data'][0]['role']=='admin'){

		        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
		            $this->_insertCategories($this->input->post());
		        }

		        else{
		            $this->load->view('admin/header');
		            $this->load->view('index');
		            $this->load->view('admin/footer');
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



public function _insertCategories(){
if(islogin()){
	 $data=$this->input->post();
     $this->Mdl_categories->setData('insert',$data['categories']);

     if($this->Mdl_categories->insertCategories()){


        setInformUser('success','Added Categories  successfully');
      
     	redirect('categories');


     }
     else{

     setInformUser('error','Added Categories Not successfully');
      
        redirect('categories');
        }
        }

          else{
            redirect(base_url('users/home'));
          }
}



public function getCategories()
{
if(islogin()){
	$data['categories']=$this->Mdl_categories->getCategories();

	/*print_r($data);*/
	}

          else{
            redirect(base_url('users/home'));
          }
}
}