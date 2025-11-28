<?php
require 'BankTransfer.php';
class PaymentProcessor
{
    protected $gateway;

    public function __construct( BankTransfer $gateway )
    {
        $this->gateway = $gateway;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}
