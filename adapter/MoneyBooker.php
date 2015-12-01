<?php

/**
 * @author Adegoke Obasa <goke@cottacush.com>
 */
// Concrete Implementation of MoneyBooker Class
class MoneyBooker {

    public function __construct() {
        // Your Code here //
    }

    public function doPayment($amount) {
        // Paying via MoneyBooker //
        echo "Paying via MoneyBooker: ".  $amount;
    }
}