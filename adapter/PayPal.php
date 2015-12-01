<?php

/**
 * PayPal Class
 * @author Adegoke Obasa <goke@cottacush.com>
 */
class PayPal {

    public function __construct() {
        // Your Code here //
    }

    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}