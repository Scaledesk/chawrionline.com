<?php  defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 15/9/15
 * Time: 2:09 AM
 */

class Mdl_roles_permissions extends CI_Model{
    private $permissions_id;
    private $roles_id;

    function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $permissions_id
     */
    public function setPermissionsId($permissions_id)
    {
        $this->permissions_id = $permissions_id;
    }

    /**
     * @param mixed $roles_id
     */
    public function setRolesId($roles_id)
    {
        $this->roles_id = $roles_id;
    }
    public function addPermissionsToRoles(){
        $this->_validate();
        $data=[
            'chawri_roles_permissions_role_id'=>$this->roles_id,
            'chawri_roles_permissions_permission_id'=>$this->permissions_id
        ];
        if($this->db->insert('chawri_roles_permissions',$data)){
            return true;
        }
        return false;
    }

    public function setData(){
        switch (func_get_arg(0)){
            case "add_permissions_to_roles":    $this->setRolesId(func_get_arg(1));
                                                $this->setPermissionsId(func_get_arg(2));
                                                break;
            default:                            break;
        }
    }

    private function _validate()
    {
        $this->setPermissionsId($this->security->xss_clean($this->permissions_id));
        $this->setRolesId($this->security->xss_clean($this->roles_id));
    }

}