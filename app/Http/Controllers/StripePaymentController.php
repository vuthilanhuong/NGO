<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    //
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('donate');
        // return view('posts.show');
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        try {
            // Find post from id and update Donated field for that Post
            $amount = $_POST['amount'];
            Stripe::setApiKey("sk_test_6OMgG9TCfY4B2C12JBiQTlMm00F9gX3Doh");
            Charge::create([
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment"
            ]);
            Session::flash('success', 'Payment successful!');
            return back();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
