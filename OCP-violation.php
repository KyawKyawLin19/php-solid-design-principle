<?php

class PaymentProcessor
{
    public function process($paymentType, $amount)
    {
        if ($paymentType == 'credit_card') {
            $this->processCreditCard($amount);
        } elseif ($paymentType == 'paypal') {
            $this->processPayPalPayment($amount);
        } else {
            throw new Exception("Unsupported payment type");
        }
    }

    private function processCreditCard($amount)
    {
        // Code to process credit card payment
        echo "Processing credit card payment of $amount\n";
    }

    private function processPayPalPayment($amount)
    {
        // Code to process PayPal payment
        echo "Processing PayPal payment of $amount\n";
    }
}

// Usage
$processor =new PaymentProcessor();
$processor->process('credit_card', 100);
$processor->process('paypal', 200);