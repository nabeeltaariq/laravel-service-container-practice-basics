<?php


namespace App\Order;


use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
  private $paymentGateway;
    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway=$paymentGateway;
    }

    public function all(){
        $this->paymentGateway->setDiscount(500);
        return [
            'name'=>'Bhatti',
        'Address'=>'Coding Fwllow',

            ];
    }
}
