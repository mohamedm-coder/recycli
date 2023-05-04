<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;




class PaymentController extends Controller
{
    
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId("AVgepu3mbjcPgs0dijQXgL72l_HhKkbbZc9gQomvRTh_9eYzGDCfjNab4B1dzqdXgjdHBoPU6W5HFBUV");
        $this->gateway->setSecret("EA7APs92HeNaYhDH0dy9jSZu1vpA6eeopqH8C4dxo20qBlC3RGopxZVtGCvfQgO8cV-3rMnNDWA8Xf3C");
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
    
    public function pay(Request $request)
    {
       
        try{
            $response=$this->gateway->purchase(array(
                'amount'=>$request->amount,
                'currency'=>('USD'),
                'returnUrl'=>url('success'),
                'cancelUrl'=>url('error'),
            ))->send();
            if($response->isRedirect()){
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } 
        catch(\Throwable $th){
            return $th->getMessage();
        }
    
    }

    public function success (Request $request)
{
    if ($request->input('paymentId') && $request->input('PayerID')){
    
        $transaction = $this->gateway->completePurchase(array(
            'payer_id' => $request->input('PayerID'),
            'transactionReference' => $request->input('paymentId'),
        ));
        $response = $transaction->send();
        if ($response->isSuccessful())
        {
            // The customer has successfully paid.
            $arr = $response->getData();
       
            // Insert transaction data into the database
            $payment = new Payment();
            $payment->payment_id = $arr['id'];
            $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
            $payment->payer_email = $arr['payer']['payer_info']['email'];
            $payment->amount = $arr['transactions'][0]['amount']['total'];
            $payment->currency = ('USD');
            $payment->payment_status = $arr['state'];
            $payment->save();
       
            return "Payment is successful. Your transaction id is: "  . $arr['id'];
        } 
        else {
            return $response->getMessage();
        }
    }
    else {
        return 'Transaction is declined';
    }

}
public function error()
{
    return 'User cancelled the payment.';
}
 
    
}

    // Once the transaction has been approved, we need to complete it.
   
       
        

       
    

    
    




