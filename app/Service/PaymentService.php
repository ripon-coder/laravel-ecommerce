<?php

namespace App\Service;

use Exception;

class PaymentService
{
    protected $paypal;
    public function __construct()
    {
       $this->paypal = new PaypalPayment();
    }
    public function HandlePayment($method,...$para)
    {
        if(!method_exists($this->paypal,$method)){
            throw new Exception("{$method} not found");
        }
        return call_user_func_array([$this->paypal,$method],$para);
    }
}
