<!DOCTYPE html>
    <html>
        <!--<![endif]-->
        <head>
        <title>@yield('title',"Daisanfood")</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.theme.css')}}">
        <link href="{{ asset('front/css/lightbox.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        </head>
        <body>

            @include('layouts.header')
            @yield('main-Content')

            @include('layouts.FrontFooter')

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('front/js/owl.carousel.js')}}"></script>
            <script src="{{ asset('front/js/responsiveslides.min.js')}}"></script>
            <script src="{{ asset('front/js/lightbox.min.js')}}"></script>
            <script type="text/javascript">
               $(document).ready(function() {
               $("#slider1").responsiveSlides({
                     speed: 800
                   });

                 var owl = $("#owl-demo");

                   owl.owlCarousel();
                   // Custom Navigation Events
                   $(".next").click(function(){
                     owl.trigger('owl.next');
                   })
                   $(".prev").click(function(){
                     owl.trigger('owl.prev');
                   })
                   $(".play").click(function(){
                     owl.trigger('owl.play',1000);
                   })
                   $(".stop").click(function(){
                     owl.trigger('owl.stop');
                   })
               var owl = $("#owl-demo2");

                   owl.owlCarousel({
                    items : 2,
                    itemsDesktop : [1000,2],
                    itemsDesktopSmall : [900,2],
                    itemsTablet: [600,1],
                    autoPlay: 3500,
                    itemsMobile : false,
                });
                var owl3 = $('#owl-demo3');
                owl3.owlCarousel({
                items : 1,
                itemsDesktop : [1000,1],
                itemsDesktopSmall : [900,1],
                itemsTablet: [600,1],
                autoPlay: 3500,
                itemsMobile : false,
                });

               });
        </script>
    </body>
</html>
