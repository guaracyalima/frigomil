{{--<header class="carousel slide" id="myCarousel">--}}
<header class="image-bg-fluid-height carousel slide" id="myCarousel">
    <div  class="">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">

            @foreach($topo as $topos)
            <div class="item active">
                <img src="{{asset("img/header/$topos->imagem")}}" alt="" class="img-of-slide">
                <div class="carousel-caption">

                    <p id="topo-title-head">
                        {{ $topos->titulo }}
                    </p>
                    <p id="topo-text-head">
                        {{ $topos->descricao }}
                    </p>

                    <p class="tex-center">
                        <a href="#products"><i class="fa fa-angle-down to-down" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
            @endforeach

            {{--<div class="item">--}}
                {{--<img src="{{ asset('img/slider/b.jpg') }}" alt="..." class="img-of-slide">--}}
                {{--<div class="carousel-caption">--}}
                    {{--@foreach($topo as $topos)--}}
                    {{--<p id="topo-title-head">--}}
                        {{--{{ $topos->titulo }}--}}
                    {{--</p>--}}
                    {{--<p id="topo-text-head">--}}
                        {{--{{ $topos->descricao }}--}}
                    {{--</p>--}}
                    {{--@endforeach--}}
                    {{--<p class="tex-center">--}}
                        {{--<i class="fa fa-angle-down to-down" aria-hidden="true"></i>--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<img src="{{ asset('img/slider/c.jpg') }}" alt="..." class="img-of-slide">--}}
                {{--<div class="carousel-caption">--}}
                    {{--@foreach($topo as $topos)--}}
                    {{--<p id="topo-title-head">--}}
                        {{--{{ $topos->titulo }}--}}
                    {{--</p>--}}
                    {{--<p id="topo-text-head">--}}
                        {{--{{ $topos->descricao }}--}}
                    {{--</p>--}}

                    {{--@endforeach--}}
                    {{--<p class="tex-center">--}}
                       {{--<i class="fa fa-angle-down to-down" aria-hidden="true"></i>--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div>--}}


        </div>

    </div>
</header>