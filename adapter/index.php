<?php
/**
 * Adapter Design Pattern Demonstration
 * @author Adegoke Obasa <goke@cottacush.com>
 */

// Using PayPal Adapter
$paypal = new PayPalAdapter(new PayPal());
$paypal->pay(2629);