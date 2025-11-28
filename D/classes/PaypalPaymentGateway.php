<?php
require 'BankTransfer.php';
class PayPalPaymentGateway implements BankTransfer
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}