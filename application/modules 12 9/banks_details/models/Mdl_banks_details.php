<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 11:48 AM
 */
class Mdl_banks_details extends CI_Model
{

    private $banks_details_id;
    private $bank_name;
    private $ifsc_code;
    private $ac_no;
    private $seller_id;

    /**
     * @return mixed
     */
    public function getBanksDetailsId()
    {
        return $this->banks_details_id;
    }

    /**
     * @param mixed $banks_details_id
     */
    public function setBanksDetailsId($banks_details_id)
    {
        $this->banks_details_id = $banks_details_id;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param mixed $bank_mane
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @return mixed
     */
    public function getIfscCode()
    {
        return $this->ifsc_code;
    }

    /**
     * @param mixed $ifsc_code
     */
    public function setIfscCode($ifsc_code)
    {
        $this->ifsc_code = $ifsc_code;
    }

    /**
     * @return mixed
     */
    public function getAcNo()
    {
        return $this->ac_no;
    }

    /**
     * @param mixed $ac_no
     */
    public function setAcNo($ac_no)
    {
        $this->ac_no = $ac_no;
    }

    /**
     * @return mixed
     */
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * @param mixed $seller_id
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "insert":
                $this->setAcNo($this->security->xss_clean($this->ac_no));
                $this->setBankName($this->security->xss_clean($this->bank_name));
                $this->setIfscCode($this->security->xss_clean($this->ifsc_code));
                $this->setSellerId($this->security->xss_clean($this->seller_id));
               

                break;

            default:
                break;
        }


    }


    public function insert(){

        $this->_validate('insert');
         /* print_r($this->bank_name);
        echo "name".$this->bank_name;
        die();*/

        $data = [
            'chawri_banks_details_bank_name' => $this->bank_name,
            'chawri_banks_details_ifsc_code' => $this->ifsc_code,
            'chawri_banks_details_ac_no' => $this->ac_no,
            'chawri_seller_id' => $this->seller_id,


        ];
        if ($this->db->insert('chawri_banks_details', $data)) {
            return true;
        }
        return false;
    }


    public function setData()
    {


        switch (func_get_arg(0)) {

            case "insert":
                $this->setSellerId(func_get_arg(1));
                $this->setBankName(func_get_arg(2));
                $this->setIfscCode(func_get_arg(3));
                $this->setAcNo(func_get_arg(4));
               

                break;


            default:
                break;
        }

    }
    public function insertToken(){
        return $this->db->where('chawri_users_id',$this->getUserId())->update('chawri_users',[
            'chawri_users_token'=>$this->getToken()
        ])?true:false;
    }
}

