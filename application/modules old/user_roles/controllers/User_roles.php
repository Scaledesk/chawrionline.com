<?php  defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 15/9/15
 * Time: 1:39 AM
 */

class User_roles extends MX_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->Model('Mdl_roles');
    }
    public function index(){
        if(isAdmin()||hasPermission('roles.content.CUD')){
//            echo "valid";
            if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
                $to_do_with_post=$_POST["todo"];
                /*echo $to_do_with_post;*/
                /*print_r($this->input->post());*/
                if(isset($to_do_with_post)){
                    if($to_do_with_post=='insert_roles'){
                        $this->_insertRoles($this->input->post());
                    }
                }
            }else{
                $this->load->view('index.php');
            }
        }
        else{
            echo "Please login first. Or you do not have the permission [access roles]";
        }
    }

    private function _insertRoles($data)
    {
        $this->Mdl_roles->setData('insert_roles',$data['roles_name']);
        if($this->Mdl_roles->insertRoles()){
            echo "Role inserted successfully";
        }else{
            echo "Some error occurred! Try Again";
        };
    }
}