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
function islogin(){
	$ci=CI::get_instance();
	if ($ci->session->has_userdata('user_data')){
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
            $ci->session->set_flashdata('message',"<div style='text-align:center;' class=' container alert alert-success'>".func_get_arg(1)."</div>");
            break;
        }
        case 'error': {
            $ci->session->set_flashdata('message',"<div style='text-align:center;' class=' container alert alert-danger'>".func_get_arg(1)."</div>");
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


function moneyFormatIndia($num){


   $fmt = new NumberFormatter($locale = 'en_IN', NumberFormatter::CURRENCY);
   $thecash= $fmt->format($num)."\n";
    return $thecash; // writes the final format where $currency is the currency symbol.
}





function convert_number_to_words($number) {
    
    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
    
    if (!is_numeric($number)) {
        return false;
    }
    
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    
    $string = $fraction = null;
    
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
    
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    
    return $string;
}