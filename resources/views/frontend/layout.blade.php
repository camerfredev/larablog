<!DOCTYPE html>
<html lang="en">

  <head>
        @include('frontend.partials.head')
  </head>

  <body>
  <!-- inclusion du menu et du header-->
        @include('frontend.partials.header')

  

    <!-- Main Content -->
    @include('message.flash')
   @yield('content')




    <hr>

  @include('frontend.partials.footer')
  </body>

</html>
