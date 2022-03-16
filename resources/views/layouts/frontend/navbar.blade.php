<nav id="navbar" class="navbar order-last order-lg-0" style=" margin-top:-40px;" >
    <ul>

      {{-- @Auth
      <li><a class="nav-link scrollto " href="/paywithrazorpay">
       <img src="{{asset('frontend/logo/card4.png')}}" height="40" width="40"
       data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pay Now">
      </a></li>
   @else   
   <li><a class="nav-link scrollto" href="/login_view">
     <img src="{{asset('frontend/logo/card4.png')}}" height="40" width="40"
     data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pay Now">
    </a></li>
   @endAuth  --}}

      <li><a class="nav-link scrollto " href="/">Home</a></li>
 
   
      <li class="dropdown"><a href="#"><span>SERVICES</span> <i class="bi bi-chevron-down"></i></a>
        <ul>

          <li><a href="/viewcourse">Courses</a></li>
          <li class="dropdown"><a href="#"><span>Man Power</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="/manpower">Current openings</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="/beproject">B.E Projects</a></li>
              <li><a href="/meproject">M.E Projects</a></li>
            </ul>
          </li>
          <li><a href="/workshop">Workshops</a></li>
          <li><a href="/symposium">Symposium</a></li>
          <li><a href="/internship">Internship</a></li>
          <li><a href="/web-design">Web Development</a></li>
        </ul>
      </li>
    
      <li><a class="nav-link scrollto" href="/contactUs">Contact</a></li>

      @Auth
      <li class="dropdown"><a href="#"><span>My Profile</span> <i class="bi bi-chevron-down"></i></a>
       <ul>
        @if(Auth::user()->role=='admin')
        <li><a href="/dashboard">Dashboard</a></li>
        @endif
        
        <li><a href="/profile_view">Profile</a></li>
        <li><a href="/my_payments">My Payments</a></li>
        <li><a href="/default_payment">Pay Now</a></li>
        <li><a href="/logout">Logout</a></li>
       </ul>
     </li>

      @else
     <li class="dropdown"><a href="#"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="/login_view">LOGIN</a></li>
        <li><a href="/register_view">SIGNUP</a></li>
  
      </ul>
     </li>
     @endAuth   
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
        <a><i class="fas fa-search" style="font-size: 20px; color:white" onclick="openSearch()"></i></a>
      </li>

 
      
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->
