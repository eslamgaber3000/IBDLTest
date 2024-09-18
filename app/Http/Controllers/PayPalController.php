<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\ExpressCheckout;


class PayPalController extends Controller
{
   
    public function handlePayment()
    {

        $cartItems = Cart::content() ;
        $items = [];
        $i = 0;
        foreach ($cartItems as $key => $value) {
            $items[$i]['name'] = $value->name;
            $items[$i]['price'] = $value->price;
            $items[$i]['desc'] = $value->name;
            $items[$i]['qty'] = $value->qty;          
            $i++ ;
        }
        $product = [];
        $product['items'] =  $items ;
        $product['invoice_id'] = rand(100000,1000000);        ;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = 'http://127.0.0.1:8000/payment-success';
        $product['cancel_url'] = 'http://127.0.0.1:8000/cancel-payment';
        $product['total'] = Cart::total();

        $paypalModule = new ExpressCheckout;

        $res = $paypalModule->setExpressCheckout($product, true);
        // dd($res);

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

}
