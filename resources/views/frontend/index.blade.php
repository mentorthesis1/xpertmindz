@extends('layouts.basesection')
@section('dashboard')

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
          <div class="carousel-inner" role="listbox">
    
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/image/slide-7.jpg)">
             
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
    </section>     
 <!-- End Hero -->


  <section id="about" class="about">
    <div class="container" >
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Services 1</h1>
        </div>
      </div>
    
      <div class="row row-cols-1 row-cols-md-3 g-4" style="display: flex;">
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/course.jpg" alt=""> 
                 <h5 class="text-image">Courses</h5>
                </div>
              
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5" style="text-align: center;">Courses</h3>
                    <p class="fs-6 text-white">If you want to see the Courses we offered in xpertmindz just click view more </p>
                    <a href="/viewcourse" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>

                  </div>
                </div>
              </div>
                
        

            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/job.jpg" alt=""> 
                  <h5 class="text-image">Manpower</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">ManPower</h3>
                    <p class="fs-6 text-white">The candidates who are searching for the jobs.we will help your job findings</p>
                    <a href="/manpower" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/project.jpg" alt="">
                  <h5 class="text-image">Projects</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Projects</h3>
                    <p class="fs-6 text-white">we done the various projects for the students in CSE  EEE   ECE department </p>
                    <a href="/project" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    
        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/workshop.jpg" alt="">
                  <h5 class="text-image">Workshop</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Workshop</h3>
                    <p class="fs-6 text-white">we are conducting workshops in various topics in your institutions as we as our institution also</p>
                    <a href="/workshop" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/symposium.jpg" alt="">
                  <h5 class="text-image">Symposium</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Symposium</h3>
                    <p class="fs-6 text-white">We conduct symposium  for students to improve his/her talent with various activites like paperpresentation,etc.. </p>
                    <a href="/symposium" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col" style="margin-top: -20px;">
          <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
            <div class="box1">
              <div class="body1">
                <div class="imgContainer1"> <img src="assets/image/service/internship.jpg" alt="">
                  <h5 class="text-image">Internship</h5>
                </div>
                <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                  <div>
                    <h3 class="text-white fs-5"  style="text-align: center;">Internship</h3>
                    <p class="fs-6 text-white">We conducting internship to improvre the chance of getting job in their relevant field</p>
                    <a href="/internship" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    
      </div>

      <div class="col" style="margin-top: -20px;">
        
        <div class="container1 d-flex align-items-center justify-content1-center flex-wrap">
             
        
          <div class="box1">
            <div class="body1">
              <div class="imgContainer1"> <img src="assets/image/service/web.jpg" alt="">
                <h5 class="text-image">Web Design</h5>
                <div class="text-block">
                  
                
                </div>
              </div>
              <div class="content1 d-flex flex-column align-items-center justify-content1-center">
                <div>
                  <h3 class="text-white fs-5"  style="text-align: center;">Web Design</h3>
                  <p class="fs-6 text-white">we are developing website for various fields and we are using latest features and frame works</p>
                  <a href="/web-design" type="button" class="btn btn-primary rounded-pill" style="margin-left: 64px;">view more</a>
                </div>
              </div>

             
            </div>
          </div>

       
        </div>

      </div> 
  
    </div>
      
      
    </div>
  </section>

  
  

    

   

    <!-- ======= About Us Section ======= -->
    <!-- End About Us Section -->
    <section id="about" class="about" style="margin-top: -130px;">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>About Us</h2>
          <p style="text-align: left; margin-top:20px;">Xpert Mindz -Innovative Solution private limited, is an educational institute under the Mentor Thesis, is administered by leading industrialists with Kuzhithurai as Head Quarters. It aims at<strong style="font-size:18px;"> “Education For a Job”</strong>. The company committed to provide Quality Education in young minds of the budding engineers and also provides<strong style="font-size:18px;"> Internship Courses , Workshops</strong>. This idea was in our mind for a long time, but took shape only in the year 2021.We provide services, such as <strong style="font-size:18px; ">Manpower , B.E/M.E projects</strong>.</hp>
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
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          {{-- <section class="logoMarqueeSection">
            <div class="container" id="logoMarqueeSection">
              <div class="default-content-container flex items-center"> --}}
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
              {{-- </div>
            </div>
          </section> --}}
          
           
      
         
      
        </div>
       
      </div>
    </section><!-- End Portfolio Section -->



  

@endsection