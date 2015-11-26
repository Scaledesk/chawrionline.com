<?php

/**
 * Created by PhpStorm.
 * User: NItesh
 * Date: 10/13/2015
 * Time: 11:47 AM
 */
class Banks_details extends MX_Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_banks_details');
    }


    public function index()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->_insert($this->input->post());


        }
        else {
            $this->load->view('users/header/header');
            $this->load->view('index.php');
        }
    }

    private function _insert($data)
    {

        $this->Mdl_banks_details->setData('insert',1 /*$this->session->userdata['user_data']['user_id']*/,$data['bank_name'], $data['ifsc_code'], $data['ac_no']
           );


        if ($this->Mdl_banks_details->insert('insert')) {
            setInformUser('success','your bank account details successful add.');
            redirect('sellers');
        }
    }
}