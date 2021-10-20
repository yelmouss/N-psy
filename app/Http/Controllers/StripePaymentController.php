<?php

   
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Session;
use Stripe;
    
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 200 * 100, // 200$ dollar
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose yelmouss devt"
        ]);

   
        Session::flash('success', 'Payment successful!');           
        return back();




    }
}