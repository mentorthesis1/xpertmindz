@extends('layouts.basesection')
@section('styles')

@endsection

@section('dashboard')
<div id="app" class="my-2">
    <main class="py-4">
        <div class="container">

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

            <div class="row">
                <div class="col-md-4">

                </div>

              <div class="col-md-4">
                  <h2 class="">Pay Now</h2>
                <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control name"  />
                <span id="name_error" class="text-danger"></span>
                </div>

                <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" class="form-control email" />
                  <span id="email_error" class="text-danger"></span>
                </div>
              
                <div class="form-group mb-2">
                <label>Phone</label>
                <input type="text" class="form-control phone"  />
                  <span id="phone_error" class="text-danger"></span>
                </div>
                <div class="form-group mb-2">
                    <label>Select your Service</label>
                    <select class="form-control service" required >
                        <option>---Select Service---</option>
                        <option value="Course">Course</option>
                        <option value="Job">Job</option>
                        <option value="Project">Project</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Symposium">Symposium</option>
                        <option value="Internship">Internship</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                      <span id="service_error" class="text-danger"></span>
                    </div>

                    <div class="form-group mb-2">
                        <label>Amount</label>
                        <input type="number"  class="form-control amount"  />
                          <span id="amount_error" class="text-danger"></span>
                        </div>
              
               
                <button class="btn btn-primary" id="rzp-button1">Pay Now</button>
              </div>

              <div class="col-md-4">

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
    
      
        var name= $('.name').val();
        var email= $('.email').val();
        var phone= $('.phone').val();
        var service= $('.service').val();
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

                           if(!service){
                             
                             service_error="service  is required";
                             $('#service_error').html("");
                             $('#service_error').html(service_error);
                           }
                           else{
                             service_error="";
                              $('#service_error').html("");
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


                           if(name_error !='' || email_error !='' || phone_error !='' || service_error !='' || amount_error !=''){
                             return false;
                           }
                           else{

                             //razorpay start

                             var total_amount = amount * 100;
                             var options = {
                                 "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                                 "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                                 "currency": "INR",
                                 "name": "Xpertmindz",
                                 // "description": "Test Transaction",
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
                                         url:"{{ route('paymentRazor') }}",
                                         data:{razorpay_payment_id:response.razorpay_payment_id,
                                           amount:amount,

                                           name:name,
                                           email:email,
                                           phone:phone,
                                           service:service,
                                          
                                         },
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
                                     "name": name,
                                     "email": email,
                                     "contact": phone
                                 },

                                 "theme": {
                                     "color": "black"
                                 }
                             };
                             var rzp1 = new Razorpay(options);
                             rzp1.open();



                             //razorpay end
                           }



    });
</script>


@endsection
