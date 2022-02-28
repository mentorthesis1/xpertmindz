@extends('layouts.basesection')
@section('dashboard')

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <div class="card card-default">
                            <div class="card-header ">
                                <h3>Xpertmindz Payment Page</h3>
                        
                            </div>

                            <div class="card-body ">
                                <div class="form-group mt-1 mb-1">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{Auth::user()->name }}" class="form-control name" placeholder="Enter your name" required>
                                     <p id="name_error" class="text-danger"></p>
                                </div>
                                <div class="form-group mt-1 mb-1">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control email" placeholder="Enter your email" required>
                                    <p id="email_error" class="text-danger"></p>
                                </div>
                                <div class="form-group mt-1 mb-1">
                                    <label>Phone No</label>
                                    <input type="text" name="phone" class="form-control phone" placeholder="Enter your phone no" required>
                                    <p id="phone_error" class="text-danger"></p>
                                </div>
                                <div class="form-group mt-1 mb-1">
                                    <label>Amount</label>
                                    <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount" required>
                                    <p id="amount_error" class="text-danger"></p>
                                </div>
                                <button id="rzp-button1" class="btn btn-success btn-md mt-3">Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    
@endsection
       
@section('scripts')
    
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $('body').on('click','#rzp-button1',function(e){
        e.preventDefault();
        var name = $('.name').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var amount = $('.amount').val();


        if(!name){
                            name_error="name is required";
                            $('#name_error').html("");
                            $('#name_error').html(name_error);
                          }
                          else{
                             name_error="";
                             $('#name_error').html("");
                          }
                          if(!email){
                            email_error="email  is required";
                            $('#email_error').html("");
                            $('#email_error').html(email_error);
                          }
                          else{
                            email_error="";
                             $('#email_error').html("");
                          }
                          if(!phone){
                            phone_error="phone number  is required";
                            $('#phone_error').html("");
                            $('#phone_error').html(phone_error);
                          }
                          else{
                            phone_error="";
                             $('#phone_error').html("");
                          }
                          if(!amount){
                            amount_error="amount  is required";
                            $('#amount_error').html("");
                            $('#amount_error').html(amount_error);
                          }
                          else{
                            amount_error="";
                             $('#amount_error').html("");
                          }

                          if(name_error !='' || email_error !='' || phone_error !='' || amount_error !=''){
                            return false;
                          }
                          else{




                          


        var total_amount = amount * 100;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Xpertmindz",
            "description": "xpertmindz payments",
            // "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url:"{{ route('payment') }}",
                    data:{razorpay_payment_id:response.razorpay_payment_id,
                    name:name,
                    email:email,
                    phone:phone,
                    amount:amount},
                    success:function(data){
                        $('.success-message').text(data.success);
                        $('.success-alert').fadeIn('slow', function(){
                           $('.success-alert').delay(5000).fadeOut(); 
                        });
                        $('.amount').val('');
                    }
                });
            },
            "prefill": {
                "name": "kalvinbenser",
                "email": "kalvinbenser1@gmail.com",
                "contact": "8681910095"
            },
            "notes": {
                "address": "kuzhithurai"
            },
            "theme": {
                "color": "black"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }

    });
</script>
@endsection