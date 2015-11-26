<?php
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 11/9/15
 * Time: 5:51 PM
 */
function asset_url(){
    return base_url().'assets/';
}
function checkSession(){
    $ci=CI::get_instance();
    if($ci->session->userdata('authorize')){
        return true;
    }
    return false;
}
function hasPermission($provided_permission){
    $ci=CI::get_instance();
    $permission=$ci->session->userdata('user_data');
    $permission=$permission['user_permissions'];
    if(checkSession()&&isset($permission)){return in_array($provided_permission,$permission)? true:false;}
    return false;
}
function isAdmin(){
    $ci=CI::get_instance();
    $role=$ci->session->userdata('user_data');
    $role=$role['user_role_name'];
    if(checkSession()){
    if(strtolower($role)=='admin'){
        return true;
        }
    }
    return false;
}
function isSocial($provided_email,$provided_provider){
    $ci=CI::get_instance();
    $ci->load->Model('users/Mdl_users');
    $ci->Mdl_users->setData('is_social',$provided_email,$provided_provider);
    return $ci->Mdl_users->isSocialRegistered()? true:false;
}
function setInformUser(){
    $ci=CI::get_instance();
    $flash_data=$ci->session->flashdata('message');
    unset($flash_data);
    switch(func_get_arg(0)){
        case 'success' : {
            $ci->session->set_flashdata('message',"<div style='text-align:center;' class='alert alert-success'>".func_get_arg(1)."</div>");
            break;
        }
        case 'error': {
            $ci->session->set_flashdata('message',"<div  style='text-align:center;' class='alert alert-error'>".func_get_arg(1)."</div>");
            break;
        }
        default:{
            break;
        }
    }
}


function getInformUser(){
    $ci=CI::get_instance();
    if($ci->session->flashdata('message')){
        echo $ci->session->flashdata('message');
    }
}

/**
 * @return bool
 */
function isAccountActive(){
    $ci=ci::get_instance();
    $ci->load->Model('users/Mdl_users');

    return $ci->Mdl_users->isActive()?true:false;
}

/**
 * credit keys to users wallet when some conditions met
 * @return bool
 */
 function offerCredit($wallet_id,$transaction_description,$transaction_type,$transaction_amount){
    $ci=CI::get_instance();
    $ci->load->Model('wallet/Mdl_wallet');
    $ci->Mdl_wallet->setData(strtolower(Wallet_transaction_type::CREDIT),array('users_email'=>$wallet_id,'transaction_description'=>$transaction_description,'transaction_type'=>$transaction_type,'transaction_amount'=>$transaction_amount));
    return $ci->Mdl_wallet->doWalletTransaction(strtolower(Wallet_transaction_type::CREDIT));
}

//test if logged in user is host or not
function isHost(){
    $ci=CI::get_instance();
    if(checkSession()){
      return strtolower($ci->session->userdata('user_data')['user_role_name'])=='host'?true :false;
    }
    return false;
}
//test if logged in user is guest or not
function isGuest(){
    $ci=CI::get_instance();
    if(checkSession()){
        return strtolower($ci->session->userdata('user_data')['user_role_name'])=='guest'?true :false;
    }
    return false;
}