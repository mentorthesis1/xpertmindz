<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;


class RazorpayController extends Controller
{    
    public function payWithRazorpay()
    {        
        return view('payWithRazorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();
        $user_id=Auth::user()->id;

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'name'=>$request->name,
                   'email'=>$request->email,
                   'phone'=>$request->phone,
                   'user_id' => $user_id,
                   'amount' => $request->amount,
                ];
                
        Payment::insertGetId($payInfo);  
        
        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }
}