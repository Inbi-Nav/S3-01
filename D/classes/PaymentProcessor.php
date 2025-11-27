<?php
require 'PaymentGatewayInterface.php';
class PaymentProcessor
{
    protected $gateway;

    public function __construct( PaymentGatewayInterface $gateway )
    {
        $this->gateway = $gateway;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}
