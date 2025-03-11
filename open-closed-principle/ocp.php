<?php
//objects or entities should be open for extension, but closed for modification
//new functionality should be implemented by adding new classes, attributes and methods,
//instead of changing the current ones
interface PaymentChannel
{
    public function pay(): string;
}

class BankTransfer implements PaymentChannel
{
    public function pay(): string
    {
        return 'Paid via Bank Transfer';
    }
}

class Paypal implements PaymentChannel
{
    public function pay(): string
    {
        return 'Paid via Paypal';
    }
}

class UPI implements PaymentChannel
{
    public function pay(): string
    {
        return 'Paid via UPI';
    }
}


class Communication
{
    public function makePayment(PaymentChannel $channel): string
    {
        return $channel->pay();
    }
}
$channel = new BankTransfer();
$makePayment = (new Communication())->makePayment($channel);
echo $makePayment;
?>