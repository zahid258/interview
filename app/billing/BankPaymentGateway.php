<?php
namespace App\billing;
use Illuminate\Support\Str;

/**
 * Created by PhpStorm.
 * User: Zahid
 * Date: 21/07/2022
 * Time: 6:57 PM
 */

class BankPaymentGateway implements PaymentGatewayContract
{
    private  $currency;
    private $discount;
    public function __construct($curency)
    {

       $this->currency = $curency;
       $this->discount = 0;
    }

    public function charge($amount){
        return [
            "amount" => $amount - $this->discount,
            "confirmation_number" => Str::random(),
            "currency" => $this->currency,
            "Discount" => $this->discount
        ];
    }
    public function setDiscount($amount){
            $this->discount = $amount;
    }
}
