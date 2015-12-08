<?php
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 20/9/15
 * Time: 6:26 PM
 */

class Email_settings extends MX_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->Model('Mdl_email_settings');
    }
    public function index(){

        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $todo_with_post=$this->input->post('todo');
            if($todo_with_post=='udeast003'){
                $this->Mdl_email_settings->setData('update',$this->input->post());
                if($this->Mdl_email_settings->update()){
                    setInformUser('success','Email settings updated successfully.');
                    redirect('email_settings','refresh');
                }else{
                    setInformUser('error','Some error occured');
                    redirect('email_settings','refresh');
                }

            }

        }else{
            $data['email_settings']=$this->Mdl_email_settings->toArray();

            $this->load->view('index',$data);
        }

    }
}