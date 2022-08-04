<style>
  @media all and (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
      display: none;
    }

    .navbar .nav-item:hover .dropdown-menu {
      display: block;
    }

    .navbar .nav-item .dropdown-menu {
      margin-top: 0;
    }
  }

  .header-area.header-sticky {
       max-height: 18px;
       min-height: 0px !important;
  }
  .background-header
  {
    height:54px !important
  }
</style>
<header class="header-area wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <!-- <div class="container">
    <div class="row">
      <div class="col-12"> -->
        <!-- <nav class="main-nav">
            
            <a href="{{url('/')}}" class="logo">
              <img src="public/assets/images/logo-v3.png" alt="">
            </a>
            
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#courses">Courses</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
              <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Login</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            
          </nav> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary gradient-background sticky-top">
          <div class="container-fluid">
            <a class="navbar-brand text-imp" href="{{ url('/') }}">GreatEWay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse main-nav" id="main_nav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"> <a class="nav-link text-imp {{ Request::is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home </a> </li>
                <li class="nav-item"><a class="nav-link text-imp {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}"> About </a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link {{ Request::is('services') ? 'active' : '' }} {{ Request::is('web-development') ? 'active' : '' }} {{ Request::is('digital-marketing') ? 'active' : '' }} {{ Request::is('hadoop') ? 'active' : '' }} {{ Request::is('seo') ? 'active' : '' }} {{ Request::is('data-warehousing') ? 'active' : '' }} text-imp dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item {{ Request::is('web-development') ? 'active' : '' }}" href="{{ route('web') }}"> Web Development</a></li>
                    <li><a class="dropdown-item {{ Request::is('digital-marketing') ? 'active' : '' }}" href="{{ route('digital') }}"> Digital Marketing </a></li>
                    <li><a class="dropdown-item {{ Request::is('hadoop') ? 'active' : '' }}" href="{{ route('hadoop') }}"> Hadoop </a></li>
                    <li><a class="dropdown-item {{ Request::is('seo') ? 'active' : '' }}" href="{{ route('seo') }}"> SEO </a></li>
                    <li><a class="dropdown-item {{ Request::is('data-warehousing') ? 'active' : '' }}" href="{{ route('data') }}"> Data Warehousing </a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link {{ Request::is('industries') ? 'active' : '' }} {{ Request::is('pharmaceuticals') ? 'active' : '' }} {{ Request::is('bpo') ? 'active' : '' }} {{ Request::is('product-engineering') ? 'active' : '' }} {{ Request::is('manufacturing') ? 'active' : '' }} {{ Request::is('life-services') ? 'active' : '' }} text-imp dropdown-toggle" href="#" data-bs-toggle="dropdown">Industries</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item {{ Request::is('pharmaceuticals') ? 'active' : '' }}" href="{{ route('pharma') }}"> Pharmaceuticals</a></li>
                    <li><a class="dropdown-item {{ Request::is('bpo') ? 'active' : '' }}" href="{{ route('bpo') }}"> BPO </a></li>
                    <li><a class="dropdown-item {{ Request::is('product-engineering') ? 'active' : '' }}" href="{{ route('product') }}"> Product Engineering </a></li>
                    <li><a class="dropdown-item {{ Request::is('manufacturing') ? 'active' : '' }}" href="{{ route('manu') }}"> Manufacturing </a></li>
                    <li><a class="dropdown-item {{ Request::is('life-services') ? 'active' : '' }}" href="{{ route('life') }}"> Life Sciences </a></li>
                  </ul>
                </li>
                <!-- <li class="nav-item"><a class="nav-link {{ Request::is('course') ? 'active' : '' }} text-imp" href="{{ url('/course') }}"> Courses </a></li> -->
                
                <li class="nav-item"><a class="nav-link {{ Request::is('IT-training') ? 'active' : '' }} text-imp" href="{{ route('training') }}"> IT Training </a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('IT-staffing') ? 'active' : '' }} text-imp" href="{{ route('staffing') }}"> IT Staffing </a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }} text-imp" href="{{ route('contact') }}"> Contact </a></li>
                <!-- <li class="nav-item"><button class="btn btn-success">Login</button></li> -->
              </ul>
            </div> <!-- navbar-collapse.// -->
          </div> <!-- container-fluid.// -->
        </nav>
      <!-- </div>
    </div>
  </div> -->
</header>