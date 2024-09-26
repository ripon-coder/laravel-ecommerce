<?php
namespace App\Service;

use App\Interface\PaymentInterface;

class PaypalPayment implements PaymentInterface{
    public function process($param)
    {
        return $param;
    }
    public function done()
    {
        
    }
}