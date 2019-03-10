  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}} ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}} ">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}} " >Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     

    <!-- Page Header -->
    {{--  <header class="masthead" style="background-image: url(@stack('bg-img'))">  --}}
    <header class="masthead" style="background-image: url({{!empty($data['bg-img'])? $data['bg-img']: "" }})">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{ !empty($data['title'])? $data['title']:'Welcome'}} </h1>
              <span class="subheading">{{ !empty($data['sub-title'])? $data['sub-title']:''}}</span>
            </div>
          </div>
        </div>
      </div>
      
    </header>