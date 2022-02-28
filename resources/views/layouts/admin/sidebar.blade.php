<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}

            <a class="nav-link" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
           @if(Auth()->user()->role == 'admin') 
            <a class="nav-link" href="/users">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i>
                </div>
                 Users
            </a>
            <a class="nav-link" href="/reports">
                <div class="sb-nav-link-icon"><i class="fas fa-comment-alt"></i></div>
                 Messages
            </a>
            <a class="nav-link" href="/talk">
                <div class="sb-nav-link-icon"><i class="fas fa-link"></i></div>
                 Talk
            </a>
            <a class="nav-link" href="/current_openning">
                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                  Jobs
            </a>
            <a class="nav-link" href="/workshop_view">
                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i>
                </div>
                  Workshop
            </a>
            <a class="nav-link" href="/payment_details">
                <div class="sb-nav-link-icon"><i class="fas fa-landmark"></i>
                </div>
                  Payments
            </a>
            @endif
            @if(Auth()->user()->role == 'user')
            <a class="nav-link" href="/current_openning">
                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                  User
            </a>
            @endif
            {{-- <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div> --}}
          
</nav>