<?php
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 18/9/15
 * Time: 3:42 PM
 */

class Wallet_transaction_type {
    const CREDIT='credit';
    const DEBIT='debit';

    public static function toArray(){
        return [self::CREDIT,self::DEBIT];
    }
}