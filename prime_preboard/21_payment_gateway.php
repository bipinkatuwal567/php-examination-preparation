<?php

interface PaymentGateway
{
    public function paymentProcess($amount);
    public function refundProcess($transactionI, $amount);
}

class Esewa implements PaymentGateway
{
    public function paymentProcess($amount)
    {
        try {
            // Simulate processing paymet with Esewa
            echo "Connecting to Esewa <br>";
            // Below code is just a random true or false making statement
            // Perform actual processing here
            if (rand(0, 10) > 4) {
                throw new Exception("Payment process can't be succeed");
            }

            echo "Payment processed successfully. <br>";
        } catch (Exception $e) {
            echo "Error Message : " . $e->getMessage() . "<br>";
        }
    }

    public function refundProcess($transactionId, $amount)
    {
        try {
            // Simulate refunding payment with PayPal
            echo "Refunding payment of $amount NPR with Esewa for transaction ID: $transactionId...<br>";

            if (rand(0, 10) > 4) {
                throw new Exception("Payment process can't be succeed");
            }
            // Perform actual refunding here
            echo "Payment refunded successfully.<br>";
        } catch (Exception $e) {
            echo "Error refunding payment with Esewa: " . $e->getMessage() . "<br>";
        }
    }
}

$esewaGateWay = new Esewa();
$esewaGateWay->paymentProcess(500);
$esewaGateWay->refundProcess("1234", 500);
