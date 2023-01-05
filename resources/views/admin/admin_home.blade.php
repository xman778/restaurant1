<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mohamed Admin</title>

    @include('admin.admincss')
    <x-app-layout>

    </x-app-layout>
    
  </head>
  <body>
    @include('admin.adminsidebar')

      


   
        <link rel="stylesheet" href="darkmaster/css/animate.min.css">
        <link rel="stylesheet" href="darkmaster/css/bootstrap.min.css">
        <link rel="stylesheet" href="darkmaster/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/templatemo-style.css">
        
   
    
        <!-- start preloader -->
        <div class="preloader">
          <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                 <div class="sk-rect2"></div>
                 <div class="sk-rect3"></div>
                 <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
             </div>
          </div>
          <!-- start home -->
          <section id="home" style="-webkit-text-fill-color: blueviolet">
            <div class="container">
              <div class="row">
                <div class="col-md-offset-2 col-md-8">
                  <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">this is our <span>land</span></h1>
                  <div class="element">
                                <div class="sub-element">Hello,this is Mohamed and this is my word</div>
                                <div class="sub-element">    لا إله إلا الله محمد رسول الله</div>
                                <div class="sub-element">dont go away there is no way out here,You can't get out.</div>
                            </div>
                  <a style="-webkit-text-fill-color: blueviolet" data-scroll href="{{route('dashboard')}}" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="1.6s">come</a>
                </div>
              </div>
            </div>
          </section>
          <!-- end home -->
         
    {{-- @include('admin.adminjs') --}}
    <script src="darkmaster/js/jquery.js"></script>
        <script src="darkmaster/js/bootstrap.min.js"></script>
            <script src="darkmaster/js/jquery.singlePageNav.min.js"></script>
        <script src="darkmaster/js/typed.js"></script>
        <script src="darkmaster/js/wow.min.js"></script>
        <script src="darkmaster/js/custom.js"></script>
     

  </body>
</html>