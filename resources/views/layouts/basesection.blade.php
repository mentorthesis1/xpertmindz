<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Xpert Mindz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="auth/css/mdb.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
  
 
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>




  @yield('styles')
 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style=" max-height:98px; top:0; background:black;">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/image/logo2.png" alt="" style="height:60px; margin-top:-15px;"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>

             
           <li><a class="nav-link scrollto " href="/payment_view">
            <img src="{{asset('frontend/logo/wallet.png')}}" height="40" width="50"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pay Now">
           </a></li>
         

          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          
          <li class="dropdown"><a href="#"><span>SERVICES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
   
              <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/java">Java</a></li>
                  <li><a href="/python">Python</a></li>
                  <li><a href="/c">C++ programing</a></li>
                  <li><a href="/web-design">Web Design</a></li>
                  <li><a href="/matlab">Matlab</a></li>
                  <li><a href="/ps">Photo Shop</a></li>
                  <li><a href="/tally">Tally</a></li>
                  <li><a href="/asp">Asp.net</a></li>
                  <li><a href="/pgdca">PGDCA</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Man Power</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/manpower">Current openings</a></li>
                </ul>
              </li>
              <li><a href="/project">Projects</a></li>
              <li><a href="/workshop">Workshops</a></li>
              <li><a href="/symposium">Symposium</a></li>
              <li><a href="/internship">Internship</a></li>
              <li><a href="/web-design">Web Development</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/contactUs">Contact Us</a></li>

          <li class="dropdown"><a href="#"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/login_view">EMPLOYEE LOGIN</a></li>
              <li><a href="/student_login">STUDENT LOGIN</a></li>
              <li><a href="/institution_login">INSTITUTION LOGIN</a></li>
            </ul>
          </li>
          <li>
            <div id="myOverlay" class="overlay">
              <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
              <div class="overlay-content">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div>
            <a><i class="fa fa-search nav-link scrollto " aria-hidden="true" style="font-size: 20px;" onclick="openSearch()"></i></button></a>
            
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
      @yield('carousal')
 <!-- End Hero -->


  

  
  <main id="main">

    

   

    <!-- ======= About Us Section ======= -->
    {{-- <section id="about" class="about" style="margin-top:33px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section --> --}}

    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="margin-top: 33px;" >
      <div class="container">
        @yield('dashboard')
      </div>
        
      </section>

  </main>
  
  <!-- End #main -->


  <div class="whatsapp-chat">
    <a href="https://wa.me/8681910095?text=I'm%20interested%20in%20your%20car%20for%20sale">
      <img src="{{asset('frontend/logo/whatsapp2.png')}}" alt="whatsapp chat" height="80px" width="80px">
    </a>
    
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #033155">
    
    <div class="footer-top" style="background-color: #033155">
      <div class="social-links mt-1" style="float: right;">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="social-links mt-6" style="float: right; margin-top: 88px; margin-right:-140px; ">
        <a href="assets/image/features-1.png" download>
          <img src="assets/image/boucherlogo.png" style="width: 500%; height: 250%; margin-left: -80px; margin-top: -14px;">
        </a>
      </div>
      <div class="container">
        <div class="row">

          {{-- <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div> --}}

          <div class="col-lg-2 col-md-6 footer-links">
            {{-- <h4>Useful Links</h4> --}}
            <ul>
               <li><a href="#" style="color: white ">Home</a></li>
               <li><a href="/about"style="color: white ">About us</a></li>
              <li><a href="#" style="color: white ">Disclaimer</a></li>
              <li> <a href="#" style="color: white ">Privacy policy</a></li>
              <li> <a href="#" style="color: white ">cookie policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" >
            
            <ul>
              <li> <a href="#" style="color: white ">Education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/viewcourse" style="color: white ">courses</a></li>
              
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links" >
            
            <ul>
              <li> <a href="#" style="color: white ">HR</a></li>
              <li> <a href="/manpower" style="color: white ">current openings</a></li>
              
            </ul>
          </div>
          
          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <a style="color: white "> &copy; 2022 </a><strong><span style="color: white ">xpert mindz innovative solution pvt ltd</span></strong><a style="color: white ">. All Rights Reserved</a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
         <a style="color: white">xpert mindz innovative solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script type="text/javascript" src="auth/js/mdb.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  @if(session()->has('message'))
  <script>
    
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: "{{session()->get('message')}}",
      showConfirmButton: false,
      timer: 3000
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
@yield('scripts')
</body>

</html>