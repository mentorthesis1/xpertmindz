
@extends('layouts.BasePage')


@section('styles')

   <style>
        @media only screen and (max-width: 500px) {
      .carousel-height {
         height:350px;
     }
    }


    /* service card style */
    /* @media only screen and (max-width: 500px) {
    .service-box{
      height:220px !important;
      width:150px !important;
      margin-bottom: 10px  !important;
 
    }
     .service-image{
         height: 240px !important;
         width: 150px !important;
     }

   
     .service-content{
       font-size: smaller !important;

     }
     .service-btn{
      font-size: smaller !important;
     }
    }

   
   */
   </style>
@endsection

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/slider/slider1.jpg')}}" class="d-block w-100 carousel-height" height="590px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        {{-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> --}}
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/slider/slider2.jpg')}}" class="d-block w-100 carousel-height" height="590px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        {{-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> --}}
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/slider/slider3.jpg')}}" class="d-block w-100 carousel-height" height="590px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        {{-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> --}}
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  {{-- <a><img src="{{asset('frontend/logo/search.png')}}" height="20px" width="20px"/></a> --}}
{{-- 
  <section id="hero">

    <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
          <div class="carousel-inner" role="listbox">
    
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(frontend/slider/course.jpg)">
             
            </div>
    
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/image/slide-9.jpg)">
              
            </div>
    
            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/image/slide-6.png)">
              
            </div>
    
          </div>
    
          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class=" bi bi-chevron-left" aria-hidden="true"></span>
          </a>
    
          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class=" bi bi-chevron-right" aria-hidden="true"></span>
          </a>
        </div>
    </section>      --}}
 <!-- End Hero -->



 {{-- <section class="bgimage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center hero-content">
        <h5>Hello, world! Full width Hero-unit header</h5>
        <p class="text-info">This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content.</p>
        <p><a href="/hero" class="btn  btn-large" style="background-color:black; color:white">Explore more »</a></p>
      </div>
    </div>
  </div>
</section> --}}


  <section id="about" class="about">
    <div class="container " >
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Services</h1>
        </div>
      </div>
    
      <div class="row row-cols-1 row-cols-md-3 g-4 " style="display: flex;">
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap ">
            <div class="box1 service-box">
              <div class="body1 ">
                <div class="imgContainer1 service-image"> <img src="assets/image/service/course.jpg" alt=""> 
                 <h5 class="text-image">Courses</h5>
                </div>
              
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5 " style="text-align: center;">Courses</h3>
                    <p class="fs-6 text-white service-content">If you want to see the Courses we offered in xpertmindz just click view more </p>
                    <a href="/viewcourse" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>

                  </div>
                </div>
              </div>
                
        

            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1 service-box">
              <div class="body1">
                <div class="imgContainer1 service-image"> <img src="assets/image/service/job.jpg" alt=""> 
                  <h5 class="text-image">Man Power</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">ManPower</h3>
                    <p class="fs-6 text-white service-content">The candidates who are searching for the jobs.we will help your job findings</p>
                    <a href="/manpower" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1 service-box">
              <div class="body1">
                <div class="imgContainer1 service-image"> <img src="assets/image/service/project.jpg" alt="">
                  <h5 class="text-image">Projects</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Projects</h3>
                    <p class="fs-6 text-white service-content">we done the various projects for the students in CSE  EEE   ECE department </p>
                    <a href="/project" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    
        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1 service-box">
              <div class="body1 ">
                <div class="imgContainer1 service-image"> 
                  <img src="assets/image/service/workshop.jpg" alt="">
                  <h5 class="text-image">Workshop</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Workshop</h3>
                    <p class="fs-6 text-white service-content">we are conducting workshops in various topics in your institutions as we as our institution also</p>
                    <a href="/workshop" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1 service-box">
              <div class="body1">
                <div class="imgContainer1 service-image"> <img src="assets/image/service/symposium.jpg" alt="">
                  <h5 class="text-image">Symposium</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Symposium</h3>
                    <p class="fs-6 text-white service-content">We conduct symposium  for students to improve his/her talent with various activites like paperpresentation,etc.. </p>
                    <a href="/symposium" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1 service-box">
              <div class="body1">
                <div class="imgContainer1 service-image"> <img src="assets/image/service/internship.jpg" alt="">
                  <h5 class="text-image">Internship</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Internship</h3>
                    <p class="fs-6 text-white service-content">We conducting internship to improvre the chance of getting job in their relevant field</p>
                    <a href="/internship" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    
      </div>

      <div class="col" style="margin-top: -20px;">
        
        <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
             
        
          <div class="box1 service-box">
            <div class="body1 service-content">
              <div class="imgContainer1 service-image"> <img src="assets/image/service/web.jpg" alt="">
                <h5 class="text-image">Web Design</h5>
                <div class="text-block">
                  
                
                </div>
              </div>
              <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                <div>
                  <h3 class="text-white fs-5"  style="text-align: center;">Web Design</h3>
                  <p class="fs-6 text-white service-content">we are developing website for various fields and we are using latest features and frame works</p>
                  <a href="/web-design" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;"><span class="service-btn">view more</span></a>
                </div>
              </div>

             
            </div>
          </div>

       
        </div>

      </div> 
  
    </div>
      
      
    </div>
  </section>

  
  <main id="main">

    

   

    <!-- ======= About Us Section ======= -->
    <!-- End About Us Section -->
    <section id="about" class="about" style="margin-top: -130px;">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>About Us</h2>
          <p style="text-align: left; margin-top:20px;">Xpert Mindz -Innovative Solution private limited, is an educational institute, is administered by leading industrialists with Kuzhithurai as Head Quarters. It aims at<strong style="font-size:18px;"> “Education For a Job”</strong>. The company committed to provide Quality Education in young minds of the budding engineers and also provides<strong style="font-size:18px;"> Internship Courses , Workshops</strong>. This idea was in our mind for a long time, but took shape only in the year 2021.We provide services, such as <strong style="font-size:18px; ">Manpower , B.E/M.E projects</strong>.</hp>
          <p style="text-align: left; margin-top:20px;">We also provide an excellent education system <strong style="font-size:18px; ">through academic, co-curricular and digital activities, education department, strategic trainings through skillful teachers,</strong> engaging deeply with all stakeholders, enhancing social-emotional learning, and carefully considering the metrics and goals wants to accomplish.</p>
          <p style="text-align: left; margin-top:20px;">We impart standard technical education with excellence and relevance to the present and the contemporary society and empower development through <strong style="font-size:18px;"> creative teaching, innovative thinking, developmental research, positive attitude building</strong>.</p>
        </div>
  
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
           
            <h4> <i class="bi bi-check-circle" style="color: blue"></i> MISSION</h4>
           
            <p>
              The mission of the Department is to equip Candidate with <strong style="font-size:18px; ">specified knowledge, skills, and values to enable them to become good human beings and productive and to achieve excellence in whatever they do </strong>  and setting up regulatory and monitoring mechanism to streamline the functioning of works.
            </p>
           
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            
            <h4> <i class="bi bi-check-circle" style="color: blue"></i> VISION</h4>
            
            <p>
              To be a technical institution of high standard and quality comparable to global standards and to produce knowledgeable leaders and entrepreneurs of professional excellence with. Further committed to impart quality education and prepare students to achieve the highest level of intellectual excellence and to develop flair for research and make them enterprising engineers in the field of technical education.
            </p>
            
            
          </div>
        </div>
  
      </div>
  </section>
    
    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
        
                <div class="default-content-container-inner marquee-wrapper relative overflow-hidden inline-block">
                  <div class="marquee" style="animation-duration: 57s;">
                    <a target="_blank"><img src="assets/image/clients/client-1.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-2.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-3.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-4.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-5.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-6.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-1.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-2.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-3.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-4.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-5.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-6.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                  </div>
                  <div class="marquee" style="animation-duration: 57s;">
                    <a target="_blank"><img src="assets/image/clients/client-1.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-2.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-3.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-4.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-5.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-6.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-1.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-2.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-3.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-4.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-5.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                    <a target="_blank"><img src="assets/image/clients/client-6.png" title="" class="marqueelogo" style="width: auto; max-width: none;"></a>
                  </div>
                </div>
         
          
           
      
         
      
        </div>
       
      </div>
    </section><!-- End Portfolio Section --> --}}

  </main><!-- End #main -->

@endsection
