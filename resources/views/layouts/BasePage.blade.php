<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Xpertmindz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/image/x.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  {{-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> --}}
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
{{-- 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
 --}}

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

  @yield('styles')
<style>
  .bgimage {
  width:100%;
  height:700px;
  background: url('assets/hero.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size:cover;
  background-attachment: fixed;
}
/* .bgimage h5 {
  color:black;
} */
.hero-content{
  margin-top:300px;
 
  
}
</style>

</head>

<body>

  {{-- <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex" style="margin-left: -104px; font-size: 14px;">
        Xpertmindz Innovative Solution Pvt Ltd
      </div>
      
    </div>
  </div> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style=" max-height:80px; top:0; background:black;">
    <div class="container d-flex align-items-center">

      {{-- <a href="/" class="logo me-auto"><img src="{{asset('assets/image/logo2.png')}}" alt="" style="height:60px; width=60px; margin-top:-12px;"></a> --}}
      <a href="/" class="logo me-auto"><img src="{{asset('frontend/logo/xpertmindz_logo_dark.svg')}}" alt="" style="height:140px; width=60px; margin-top:-50px;"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

   @include('layouts.frontend.navbar')
     

    </div>
  </header><!-- End Header -->


  @yield('content')

  <div class="whatsapp-chat">
    <a href="https://wa.me/8681910095?text=I'm%20interested%20in%20your%20car%20for%20sale">
      <img src="{{asset('frontend/logo/whatsapp2.png')}}" alt="whatsapp chat" height="65px" width="65px">
    </a>
    
    
  </div>
  
@include('layouts.frontend.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="margin-bottom: 71px;"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



  @if(session()->has('message'))
  <script>
    
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: "{{session()->get('message')}}",
      showConfirmButton: false,
      timer: 2000
    })
    </script>
  @endif
  

  <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }
    
    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
    </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/62160a36a34c24564127bfc0/1fsj1fpgb';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->


</body>

</html>