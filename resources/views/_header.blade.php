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

            <div class="item active">
                <img src="{{ asset('img/slider/a.jpg') }}" alt="..." class="img-of-slide">
                <div class="carousel-caption">
                    @foreach($topo as $topos)
                    <p id="topo-title-head">
                        {{ $topos->titulo }}
                    </p>
                    <p id="topo-text-head">
                        {{ $topos->descricao }}
                    </p>
                        @endforeach
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/slider/b.jpg') }}" alt="..." class="img-of-slide">
                <div class="carousel-caption">
                    @foreach($topo as $topos)
                        <p id="topo-title-head">
                            {{ $topos->titulo }}
                        </p>
                        <p id="topo-text-head">
                            {{ $topos->descricao }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/slider/c.jpg') }}" alt="..." class="img-of-slide">
                <div class="carousel-caption">
                    @foreach($topo as $topos)
                        <p id="topo-title-head">
                            {{ $topos->titulo }}
                        </p>
                        <p id="topo-text-head">
                            {{ $topos->descricao }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</header>