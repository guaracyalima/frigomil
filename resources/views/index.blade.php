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
        //calculadora de churrasco
        function calculaChurrasco(){
            // zerando total
            document.getElementById("valor").value = '0';

            // valor líquido
            var gramas = 400;

            //pega a quantidade
            var quantidade = document.getElementById("calculator-input").value;

            var valorReal = quantidade * gramas;

            console.log("Quantidade e valorUnitario "+valorReal);

            var TOTAL = valorReal;

            var kg = TOTAL;
           // var kg = TOTAL / 100;

            console.log("O valor é " + TOTAL);
            document.getElementById("valor").value = kg.toFixed();
            document.getElementById("calculator-input-participants-number").value = quantidade;
        }

        //toogle dos produtos
        $(function(){
            $(".btn-trugee").click(function(e){
                e.preventDefault();
                el = $(this).data('element');
                $(el).toggle();
            });
        });

        //duração dos slides
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        //slide  de produtos
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
                    items:4,
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
                center: {lat: -11.6781389, lng: -61.1879607},
                zoom: 20,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaavuqu-R_ycB5Y8m86FHcLSnZavbx3k&callback=initMap"
    async defer></script>



    <script type="text/javascript">
        //anima a rolagem da pagina
        $(function() {
          $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
              }, 1000);
                return false;
            }
        }
        });
      });
   </script>

<script type="text/javascript">

    $(function() {                       //run when the DOM is ready
        $(".calculator-button").click(function() {  //use a class, since your ID gets mangled
            $(this).addClass("ativadaodoido");      //add the class to the clicked element
        });
    });
//toogle
$(document).ready(function(){

$(".filter-button").on('click',function(){
var value = $(this).attr('data-filter');

if(value == "all")
{
$('.filter').removeClass('hidden');
$('.filter').show('1000');
$('.filter-button').removeClass('ativado');
}
else
{

$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');
$('.filter-button').addClass('ativado');

}
});

});

$(document).ready(function(){
$('.filter-button').click(function(){
$(this).addClass('ativado');
});
});

</script>
        @endsection