<?php 
require 'BankTransfer.php';

class StripePaymentGateway implements BankTransfer
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}