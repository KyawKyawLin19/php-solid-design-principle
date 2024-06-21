<?php

interface PaymentMethod
{
    public function process($amount);
}

class CreditCard implements PaymentMethod
{
    // Code to process Credit Card
    public function process($amount)
    {
        echo "Process payment with credit card";
    }
}

class PayPal implements PaymentMethod
{
    // Code to process Payal
    public function process($amount)
    {
        echo "Process payment with paypal card";
    }
}

class PaymentProcessor
{
    public function process(PaymentMethod $paymentMethod, $amount)
    {
        $paymentMethod->process($amount); // closed for modification
    }

}


// Usage
$processor =new PaymentProcessor();
$processor->process(new CreditCard, 100);
$processor->process(new PayPal, 200);