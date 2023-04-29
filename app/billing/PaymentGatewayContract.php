<?php

namespace App\billing;


/**
 * Created by PhpStorm.
 * User: Zahid
 * Date: 21/07/2022
 * Time: 6:57 PM
 */
interface PaymentGatewayContract
{

    public function charge($amount);

    public function setDiscount($amount);
}
