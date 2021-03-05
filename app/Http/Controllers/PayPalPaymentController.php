<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

class PayPalPaymentController extends Controller
{
    public function paypal()
    {
  
        return view('product');
    }

    public function handlePayment()
    {
        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => 112,
                'desc'  => 'Running shoes for Men',
                'qty' => 2
            ]
        ];
  
        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;
        // dd($product);
        
        
        $paypalModule = new ExpressCheckout;
        // dd($paypalModule);
  
        $res = $paypalModule->setExpressCheckout($product);
        // dd($res);
        $res = $paypalModule->setExpressCheckout($product, true);
  
        return redirect($res['paypal_link']);
    }
   
    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }
  
    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Payment was successfull. The payment success page goes here!');
        }
  
        dd('Error occured!');
    }


    public function createPayment(Request $request)
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('PAYPAL_SANDBOX_API_PASSWORD'),     // ClientID
                env('PAYPAL_SANDBOX_API_SECRET')      // ClientSecret
            )
        );

    
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
    
        // $item1 = new Item();
        // $item1->setName('Ground Coffee 40 oz')
        //     ->setCurrency('USD')
        //     ->setQuantity(1)
        //     ->setSku("123123") // Similar to `item_number` in Classic API
        //     ->setPrice(7.5);
        // $item2 = new Item();
        // $item2->setName('Granola bars')
        //     ->setCurrency('USD')
        //     ->setQuantity(5)
        //     ->setSku("321321") // Similar to `item_number` in Classic API
        //     ->setPrice(2);
    
        // $itemList = new ItemList();
        // $itemList->setItems(array($item1, $item2));
    
        // $details = new Details();
        // $details->setShipping(1.2)
        //     ->setTax(1.3)
        //     ->setSubtotal(17.50);
    
        $amount = new Amount();
        // $amount->setCurrency("USD")
        //     ->setTotal(20)
        //     ->setDetails($details);
        $amount->setCurrency("USD")
            ->setTotal($request->amount);
    
        $transaction = new Transaction();
        // $transaction->setAmount($amount)
        //     ->setItemList($itemList)
        //     ->setDescription("Payment description")
        //     ->setInvoiceNumber(uniqid());
    
        $transaction->setAmount($amount)
            // ->setItemList($itemList)
            ->setDescription($request->description)
            ->setInvoiceNumber(uniqid());
    
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://localhost:8000")
            ->setCancelUrl("http://localhost:8000");
    
        // Add NO SHIPPING OPTION
        $inputFields = new InputFields();
        $inputFields->setNoShipping(1);
    
        $webProfile = new WebProfile();
        $webProfile->setName('test' . uniqid())->setInputFields($inputFields);
    
        $webProfileId = $webProfile->create($apiContext)->getId();
    
        $payment = new Payment();
        $payment->setExperienceProfileId($webProfileId); // no shipping
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
    
        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            echo $ex;
            exit(1);
        }
    
        return $payment;
    }

    public function executePayment(Request $request) {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('PAYPAL_SANDBOX_API_PASSWORD'),     // ClientID
                env('PAYPAL_SANDBOX_API_SECRET')         // ClientSecret
            )
        );
    
        $paymentId = $request->paymentID;
        $payment = Payment::get($paymentId, $apiContext);
    
        $execution = new PaymentExecution();
        $execution->setPayerId($request->payerID);
    
        // $transaction = new Transaction();
        // $amount = new Amount();
        // $details = new Details();
    
        // $details->setShipping(2.2)
        //     ->setTax(1.3)
        //     ->setSubtotal(17.50);
    
        // $amount->setCurrency('USD');
        // $amount->setTotal(21);
        // $amount->setDetails($details);
        // $transaction->setAmount($amount);
    
        // $execution->addTransaction($transaction);
    
        try {
            $result = $payment->execute($execution, $apiContext);
        } catch (Exception $ex) {
            echo $ex;
            exit(1);
        }
    
        return $result;
    }


    
}
