<?php 
namespace App\Interface;
interface PaymentInterface{
    public function process($param);
    public function done();
}