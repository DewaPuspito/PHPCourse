<?php

interface PaymentProcessor {
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
} 

abstract class OnlinePaymentProcessor implements PaymentProcessor {
    public function __construct(protected string $apiKey) {}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float $amount): bool {
        if(!$this->validateApiKey()) {
            throw new Exception("Invalid API Key" . "\n");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float $amount): bool {
        if(!$this->validateApiKey()) {
            throw new Exception("Invalid API Key" . "\n");
        }
        return $this->executeRefund($amount);
    }
}

class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, "sk_") === 0;
    } 
    protected function executePayment(float $amount): bool {
        echo "Stripe payment of " . $amount . " processed..." . "\n";
        return true;
    }
    protected function executeRefund(float $amount): bool {
        echo "Stripe refund of " . $amount . " processed..." . "\n";
        return true;
    }
}
class PayPalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strlen($this->apiKey) === 32;
    }
    protected function executePayment(float $amount): bool {
        echo "PayPal payment of " . $amount . " processed..." . "\n";
        return true;
    }
    protected function executeRefund(float $amount): bool {
        echo "PayPal refund of " . $amount . " processed..." . "\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float $amount): bool {
        echo "Cash payment processed..." . "\n";
        return true;
    }

    public function refundPayment(float $amount): bool {
        echo "Cash refund processed..." . "\n";
        return true;
    }
}

class OrderProcessor {
    public function __construct(protected PaymentProcessor $paymentProcessor) {}

    public function processOrder(float $amount): void {
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully." . "\n";
        } else {
            echo "Order processing failed." . "\n";
        }
    }

    public function refundOrder(float $amount): void {
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Order refunded successfully." . "\n";
        } else {
            echo "Order refund failed." . "\n";
        }
    }
}

$stripeProcessor = new StripeProcessor("sk_test_1234567890");
$paypalProcessor = new PayPalProcessor("12345678901234567890123456789012");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(50.00);

$stripeOrder->refundOrder(50.00);
$paypalOrder->refundOrder(75.00);  
$cashOrder->refundOrder(25.00);