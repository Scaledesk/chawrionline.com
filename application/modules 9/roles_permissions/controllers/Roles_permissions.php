<?php  defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 15/9/15
 * Time: 2:08 AM
 */

class Roles_permissions extends MX_Controller{

    function __construct(){
        parent::__construct();
        $this->load->Model('Mdl_roles_permissions');
    }

    public function index(){
        if(isAdmin()||hasPermission('roles_permissions.content.CUD')){
//            echo "valid";
            if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
                $to_do_with_post=$_POST["todo"];
                /*echo $to_do_with_post;*/
                /*print_r($this->input->post());*/
                if(isset($to_do_with_post)){
                    if($to_do_with_post=='add_permissions_to_roles'){
                        $this->_insertRolesPermissions($this->input->post());
                    }
                }
            }else{
                $this->load->Model('user_roles/Mdl_roles');
                $this->load->Model('permissions/Mdl_permissions');
                $roles=$this->Mdl_roles->getRolesName();
                foreach($roles as $role){
                    /*print_r($role['hlu_roles_name']);
                    die;*/
                    $roles1[$role['hlu_roles_id']]=$role['hlu_roles_name'];
                }
                $permissions=$this->Mdl_permissions->getpermissionsName();
                foreach($permissions as $permission){
                    /*print_r($role['hlu_roles_name']);
                    die;*/
                    $permissions1[$permission['hlu_permissions_id']]=$permission['hlu_permissions_name'];
                }
                /*echo "<pre/>";
                print_r($roles1);
                echo "<br/>";
                print_r($permissions1);*/
                $data['roles']=$roles1;
                $data['permissions']=$permissions1;
                $this->load->view('admin/header/header');
                $this->load->view('index.php',$data);
            }
        }
        else{
            echo "Please login first. Or you do not have the permission [give permissions to roles]";
        }
    }

    private function _insertRolesPermissions($data)
    {
        $this->Mdl_roles_permissions->setData('add_permissions_to_roles',$data['roles_id'],$data['permissions_id']);
        if($this->Mdl_roles_permissions->addPermissionsToRoles()){
            echo "Permission added to Role successfully";
        }else{
            echo "Some error occurred! Try Again";
        };
    }

}