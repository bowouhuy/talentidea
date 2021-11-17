<?php
function buyProduct()
{
    // Check if item is available for sale
    if ($item->IsAvailableForSale())
    {
        // Check if payment has been made
        if ($payment->IsPaymentMade())
    {
        // Check if amount paid is sufficient
        if ($payment->calcAmount() >= $item->price())
    {
        // Check if the item has stock in store
        if ($store->HasStock())
    {
        // Place order from store
    }
    else
    {
    // Check if the item has stock in warehouse
    if ($warehouse->hasStock())
    {
    // Place order from warehouse
    }
    else
    {
    // Out of stock
            }
        }
 }  else {
        // Insufficient funds
    }
        } else{
        // Ask for payment
        }}else{
        // Product is not available
        }
    }

    function buyProduct2(){

        // check if item is available for sale 
        if (!$item ->IsAvailableForSale())
        {
            //product is not available
        }
        //product is paymenthas been made
        if (!$payment->IsPaymentMade())
        {
            // Ask for payment
        }
        // check if amount paid is sufficient
        if (!$payment->calcAmount() >= $item->price())
        {
            // Insuffcient funds
        }
        if (!$store->HasStock() && !$warehouse->HasStock())
        {
            // out of stock
        }
        // checkif this item has no stock in store 
        if ($warehouse->HasStock() && !$store->HasStock())
        {
            // place order from warehouse 
        }
        // place order form STORE

    }

//Wisnu andrian - 1900018419 
    interface PayableInterface {
        public function pay();
    }
    
    class transferPayment implements PayableInterface {
    
        public function pay()
        {
            echo 'Payment is processing via transfered by atm ...' . PHP_EOL;
        }
    
    }
    
    class gopayPayment implements PayableInterface {    
    
        public function pay()
        {
            echo 'Payment is processing via Gopay...' . PHP_EOL;
        }
    
    }

    
    class paypalPayment implements PayableInterface {

        public function pay()
        {
            echo 'Payment is processing via PayPal...' . PHP_EOL;
        }
    
    }


    class creditCardPayment implements PayableInterface {

        public function pay()
        {
            echo 'Payment is processing via credit card...' . PHP_EOL;
        }
    
    }

    class payLaterPayment implements PayableInterface {

        public function pay()
        {
            echo 'Payment is processing via pay later...' . PHP_EOL;
        }
    
    }
    class PaymentFactory {
    
        public function initialize($method)
        {
            switch ($method) {
                case 'transfer':
                    return new transferPayment();
                    break;
                case 'gopay':
                    return new gopayPayment();
                    break;
                case 'paypal':
                    return new paypalPayment();
                    break;
                case 'cc':
                    return new creditCardPayment();
                    break;
                case 'paylater':
                    return new payLaterPayment();
                    break;
                default:
                    exit('Invalid payment method!');
                    break;
            }
        }
    
    }
    
    $paymentFactory = new PaymentFactory();
    $payment = $paymentFactory->initialize('paypal');
    $payment->pay();

?>