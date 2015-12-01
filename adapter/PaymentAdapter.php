<?php

/**
 * @author Adegoke Obasa <goke@cottacush.com>
 */
interface PaymentAdapter
{
    /**
     * Makes payment
     * @author Adegoke Obasa <goke@cottacush.com>
     * @param $amount
     * @return mixed
     */
    public function pay($amount);
}