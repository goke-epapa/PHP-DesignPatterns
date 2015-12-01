<?php
/**
 * Adapter Design Pattern Demonstration
 * @author Adegoke Obasa <goke@cottacush.com>
 */

//require('PayPalAdapter.php');
// Using PayPal Adapter
//$paypal = new PayPalAdapter(new PayPal());
//$paypal->pay(2629);

require('MoneyBookerAdapter.php');
$moneyBooker = new MoneyBookerAdapter(new MoneyBooker());
$moneyBooker->pay(5000);