<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Bootstrap 5.0 HTML Template</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <style>
        img{
            height: 300px;
        }
    </style>
<!--
    


-->
</head>




<body>
        <!-- Page Loader -->
        <div id="loader-wrapper">
            <div id="loader"></div>
    
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
    
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <i class="fas fa-film mr-2"></i>
                    Catalog-Z
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2" href="videos.html">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="contact.html">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
      
        <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
            <form class="d-flex tm-search-form">
                <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success tm-search-btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-12 tm-text-primary">Photo title goes here</h2>
                <a href=" {{route('vegetable.index')}} ">ve trang chu </a>
            </div>
          
            <div class="row tm-mb-90">  
                @isset($vegetable)
                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                    <img src="/img/{{$vegetable->image}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="tm-bg-gray tm-video-details">
                        <p class="mb-4">
                            Please support us by making <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a PayPal donation</a>. Nam ex nibh, efficitur eget libero ut, placerat aliquet justo. Cras nec varius leo.
                        </p>
                        <div class="text-center mb-5">
                            <a href="#" class="btn btn-primary tm-btn-big">Mua ngay</a>
                        </div>                    
                        <div class="mb-4 d-flex flex-wrap">
                            <div class="mr-4 mb-2">
                                <span class="tm-text-gray-dark">Gia goc: </span><span class="tm-text-primary">{{$vegetable->old_price}} </span>
                            </div>
                            <div class="mr-4 mb-2">
                                <span class="tm-text-gray-dark">Gia hien tai:  </span><span class="tm-text-primary">{{$vegetable->new_price}} </span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h3 class="tm-text-gray-dark mb-3">Description</h3>
                            <p> {{$vegetable->description}} </p>
                        </div>
                        <div>
                            <h3 class="tm-text-gray-dark mb-3">Name</h3>
                            <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{$vegetable->name}}</a>
                        
                        </div>
                    </div>
                </div>
                @endisset          
              
               
            </div>
            <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
                <div class="container-fluid tm-container-small">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                            <h3 class="tm-text-primary mb-4 tm-footer-title">About Catalog-Z</h3>
                            <p>Catalog-Z is free <a rel="sponsored" href="https://v5.getbootstrap.com/">Bootstrap 5</a> Alpha 2 HTML Template for video and photo websites. You can freely use this TemplateMo layout for a front-end integration with any kind of CMS website.</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                            <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                            <ul class="tm-footer-links pl-0">
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                            <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                                <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                                <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                                <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                            <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                            <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                            Copyright 2020 Catalog-Z Company. All rights reserved.
                        </div>
                        <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                            Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                        </div>
                    </div>
                </div>
            </footer>
            
    <script src="{{asset('js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
 

</html>