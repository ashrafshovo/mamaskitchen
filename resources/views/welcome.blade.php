<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Elaravel">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('images/star.png') }}" type="favicon/ico" />

        <title>Mamma's Kitchen</title>

        <link rel="icon" href="{{ asset('front/images/icons/icon.png') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/pricing.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <style>
            @foreach ($sliders as $key=>$slider)
                .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key+1 }}) .item
                {
                    background: url( {{ asset('uploads/slider/'.$slider->image) }} );
                    background-size: cover;
                    margin-top: -10px;
                }
            @endforeach
        </style>


        <script src="{{ asset('front/js/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('front/js/jquery.flexslider.min.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>
/*
        <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
*/

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{ asset('front/images/Logo_main.png') }}" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">about</a></li>
                        <li><a href="#pricing">pricing</a></li>
                        <li><a href="#great-place-to-enjoy">beer</a></li>
                        <li><a href="#breakfast">bread</a></li>
                        <li><a href="#featured-dish">featured</a></li>
                        <li><a href="#reserve">reservation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel" style="margin-top: 77px;">
            @foreach ($sliders as $key=>$slider)
                <div class="item">
                    <div class="container">
                        <div class="header-content">
                            <h1 class="header-title">{{ $slider->title }}</h1>
                            <p class="header-sub-title">{{ $slider->sub_title }}</p>
                        </div> <!-- /.header-content -->
                    </div>
                </div>
            @endforeach

        </section>



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="{{ asset('front/images/icons/about_color.png') }}" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">About us</h2>
                                @foreach($abouts as $about)
                                    <p class="section-content-para">
                                        {{ $about->paragraph }}
                                    </p>
                                @endforeach
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Our Menu List In Affordable Pricing</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            @foreach ($categories as $key=> $category)
                                                <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                            @endforeach
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                @foreach ($items as $item)
                                    <li class="item" id="{{ $item->category->slug }}">

                                        <a href="#">
                                            <img src="{{ asset('uploads/item/'.$item->image) }}" alt="item" class="img-responsive" style="height: 300px;width: 369px;" >
                                            <div class="menu-desc text-center">
                                                <span>
                                                    <h3>{{ $item->name }}</h3>
                                                    {{ $item->description }}
                                                </span>
                                            </div>
                                        </a>

                                        <h2 class="white">${{ $item->price }}</h2>
                                    </li>

                                @endforeach

                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/beer_black.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Great Place to enjoy</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->



        <!--==  9. Our Beer  ==-->
        <section id="beer" class="beer">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/beer_color.png') }}">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>

                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">Our Beer</h2>
                            <div class="section-description">
                                @foreach($beers as $beer)
                                    <p class="section-content-para">
                                        {{ $beer->paragraph }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--== 10. Our Breakfast Menu ==-->
        <section id="breakfast" class="breakfast">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/bread_black.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Our Breakfast Menu</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->



        <!--== 11. Our Bread ==-->
        <section id="bread" class="bread">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/bread_color.png') }}">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">
                                Our Bread
                            </h2>
                            <div class="section-description">
                                @foreach($breads as $bread)
                                    <p class="section-content-para">
                                        {{ $bread->paragraph }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!--== 12. Our Featured Dishes Menu ==-->
        <section id="featured-dish" class="featured-dish">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/food_black.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Our Featured Dishes Menu</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#featured-dish -->




        <!--== 13. Menu List ==-->
        <section id="menu-list" class="menu-list">
            <div class="container">
                <div class="row menu">
                    <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                        <div class="row">
                            @foreach($menucategories as $menu)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>{{ $menu->name }}</h2>
                                    </div>
                                </div>
                                
                                @foreach($featureddishes as $dish)
                                    @if($dish->menu_category->name == $menu->name)
                                        <div class="row">
                                            <div class="menu-item">
                                                <h3 class="menu-title">{{ $dish->title }}</h3>
                                                <p class="menu-about">{{ $dish->about }}</p>

                                                <div class="menu-system">
                                                    <div class="half">
                                                        <p class="per-head">
                                                            <span><i class="fa fa-user"></i></span>{{ $dish->peo }}:{{ $dish->ple }}
                                                        </p>
                                                    </div>
                                                    <div class="half">
                                                        <p class="price">${{ $dish->price }}.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            @endforeach

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="menu-catagory">
                                        <h2>Special</h2>
                                    </div>
                                </div>
                                @foreach($specialdishes as $special)
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">{{ $special->title }}</h3>
                                        <p class="menu-about">{{ $special->about }}</p>

                                        <div class="menu-system">
                                            <div class="half">
                                                <p class="per-head">
                                                    <span><i class="fa fa-user"></i></span>{{ $special->peo }}:{{ $special->ple }}
                                                </p>
                                            </div>
                                            <div class="half">
                                                <p class="price">${{ $special->price }}.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div id="moreMenuContent"></div>
                        <div class="text-center">
                            <a id="loadMenuContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--== 14. Have a look to our dishes ==-->

        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/food_color.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        @foreach($havelooksliders as $slider)
                                            <li>
                                                <img src="{{ asset('uploads/haveslider/'.$slider->image) }}" />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Have A Look To Our Dishes</h2>
                        </div>


                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/reserve_black.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('front/images/icons/reserve_color.png') }}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="{{ route('reservation') }}">
                                        @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>16th Birn street Get Plaza (4th floar) USA</p>
                            <p>+44 12 213584</p>
                            <p>example@mail.com </p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="{{ $social->facebook }}" class="fb" target="_blank"></a></li>
                                <li><a href="{{ $social->twitter }}" class="twit" target="_blank"></a></li>
                                <li><a href="{{ $social->google_plus }}" class="g-plus" target="_blank"></a></li>
                                <li><a href="{{ $social->linkedin }}" class="link" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{-- 
        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>

 --}}

        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="{{ route('contact') }}">
                                @csrf

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, {{-- date('Y') --}} 
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> 
                                <a href="{{ route('welcome') }}">{{ $footers->app_name }}.</a> Developed by <a href="{{ $footers->developer_link }}" target="_blank">{{ $footers->developer_name }}.</a> Theme by <a href="{{ $footers->theme_by }}"  target="_blank">{{ $footers->theme_by_name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.mixitup.min.js') }}" ></script>
        <script src="{{ asset('front/js/wow.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('front/js/jquery.hoverdir.js') }}"></script>
        <script src="{{ asset('front/js/jQuery.scrollSpeed.js') }}"></script>
        <script src="{{ asset('front/js/script.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                
                <script>
                    toastr.error('{{ $error }}');
                </script>

            @endforeach
        @endif

        <script>
            $(function (){
                $('#datetimepicker1').datetimepicker({
                    format: "dd MM yyyy - HH:11 p",
                    showMeridian: true,
                    autoclose: true,
                    todayBtn: true
                });
            });
        </script>

        {!! Toastr::message() !!}

    </body>
</html>
