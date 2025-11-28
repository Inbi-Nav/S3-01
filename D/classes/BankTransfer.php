<?php 
interface BankTransfer
{
    public function sendPayment(float $amount): string;
}
?>