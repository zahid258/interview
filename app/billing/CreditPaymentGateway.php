<?php

namespace App\billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
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
            "Discount" => $this->discount,
            "fees" => "credit card have fees"
        ];
    }
    public function setDiscount($amount){
        $this->discount = $amount;
    }
}
