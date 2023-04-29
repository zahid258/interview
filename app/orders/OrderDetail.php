<?php

namespace App\orders;

use App\billing\BankPaymentGateway;
use App\billing\PaymentGatewayContract;

class OrderDetail
{
    private $paymentGateway;
    public function __construct(PaymentGatewayContract $paymentGateway)
    {

        $this->paymentGateway = $paymentGateway;
    }
    public function  all(){
        $this->paymentGateway->setDiscount(500);
        return [
            'name' => "Victor",
            'address'=> "123 coder"
        ];

    }
}
