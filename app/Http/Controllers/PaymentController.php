<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Paystack;


class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
       
            return Paystack::getAuthorizationUrl()->redirectNow();
               
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if( $success=Arr::get($paymentDetails, 'data.status') ==  'success'){
       
            $naira=Arr::get($paymentDetails, 'data.amount')/100;
            ///insert into database
            DB::table('paids')->insert([
                'user_id'=>Auth::user()->id,
                'amount'=> $naira,
                
            ]);
            //fund the  user account
             $balance=DB::table('users')->where('id',Auth::user()->id)->value('account_balance');
             $dollar= $naira / 400;
            DB::table('users')->where('id',Auth::user()->id)->update([
                'account_balance'=>$dollar,
                
            ]);

       return redirect('home');

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
   
 }
}