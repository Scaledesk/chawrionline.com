<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 20/9/15
 * Time: 4:53 PM
 */


class MY_Email extends CI_Email{
    /**
     *
     */
    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        $ci=CI::get_instance();
        $ci->load->Model('Email_settings/Mdl_email_settings'); //load email settings model
        $smtp=$ci->Mdl_email_settings->toArray();//get object valeus in array
        $config=array();
        $config['protocol']='smtp';
        $config['mailpath']= '/usr/sbin/sendmail';
        $config['smtp_host']=$smtp['smtp_host'];
        $config['smtp_pass']=$smtp['smtp_pass'];// email's password    - set smtp values
        $config['smtp_user']=$smtp['smtp_user'];
        $config['smtp_port']=$smtp['smtp_port'];//gmail port 465 (ssl) and 587 (TSL) required
        $config['smtp_timeout']=10;//smtp timeout in seconds
        $config['wordwrap']=TRUE;
        $config['wrapchars']=76;
        $config['mailtype']='html';
        $config['charset']='utf-8';
        $config['validate']=TRUE;
        $config['priority']=3;
        $config['crif']="\r\n";
        $config['newline']="\r\n";
        $config['bcc_batch_mode']=TRUE;
        $config['bcc_batch_size']=200;
        parent::__construct($config);
    }
}
