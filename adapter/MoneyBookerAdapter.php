<?php

/**
 * @author Adegoke Obasa <goke@cottacush.com>
 */
class MoneyBookerAdapter implements PaymentAdapter
{

    protected $moneyBooker;
    public function __construct(MoneyBooker $moneyBooker)
    {
        $this->moneyBooker = $moneyBooker;
    }

    /**
     * Makes payment
     * @author Adegoke Obasa <goke@cottacush.com>
     * @param $amount
     * @return mixed
     */
    public function pay($amount)
    {
        $this->moneyBooker->doPayment($amount);
    }
}