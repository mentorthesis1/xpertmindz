<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;


use Redirect;
use Illuminate\Support\Facades\Auth;
class RazorpayController extends Controller
{
   

    public function payWithRazorpay()
    {            
        return view('payment.razorpay');
    }

    public function paymentRazor(Request $request)
    {
        $input = $request->all();
     

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
                   'amount' => $request->amount,
      
                ];

        Payment::create($payInfo);

        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful,Please check Myorders page']);
    }

    
}
