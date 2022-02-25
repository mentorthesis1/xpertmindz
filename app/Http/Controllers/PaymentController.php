<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;




class PaymentController extends Controller
{
    public function payment_view(){
        return view('payment.payment_view');
    }

    public function paymentRazor(Request $request)
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
                   'amount' => $request->amount,
                   'service' => $request->service,

                   'status'=>'onprocess',
                ];

        Payment::create($payInfo);

        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful,Please check Myorders page']);
    }

}
