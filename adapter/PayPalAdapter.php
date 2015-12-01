<?php

require('PaymentAdapter.php');
require('PayPal.php');
/**
 * @author Adegoke Obasa <goke@cottacush.com>
 */
class PayPalAdapter implements PaymentAdapter
{

    private $payPal;
    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    /**
     * Makes payment
     * @author Adegoke Obasa <goke@cottacush.com>
     * @param $amount
     * @return mixed
     */
    public function pay($amount)
    {
        $this->payPal->sendPayment($amount);
    }
}