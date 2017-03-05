@extends('layouts.front')
@section('conteudo')

    @include('_header')
    @include('_products')
    @include('_about')
    @include('_contact')
    @include('_calculator')
    @include('_footer')

@endsection
@section('js')
    <script>

        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            margin:20,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true
                }
            },
            nav: true,
            navText: ["<img src='http://toyopecaseservicos.com.br/img/icons/ic_arrow_back_white_18px.svg' style='height: 3em;'>",
                "<img src='http://toyopecaseservicos.com.br/img/icons/ic_arrow_forward_white_18px.svg' style='height: 3em;'>"]
        });

        $(window).scroll(function() {
            if ($(document).scrollTop() > 10) {
                $('nav').addClass('shrink');
            } else {
                $('nav').removeClass('shrink');
            }
        });
    </script>
    <script type="text/javascript">
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -8.1249605, lng: -34.9156716},
                zoom: 20,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaavuqu-R_ycB5Y8m86FHcLSnZavbx3k&callback=initMap"
            async defer></script>
    @endsection