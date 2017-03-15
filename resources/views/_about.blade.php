<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container about" id="about">
                    <aside class="about-container">
                        @foreach($sobre as $item)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-img">

                                    <img src="{{ asset("img/about/$item->imagem") }}" alt="" class="about-img img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <p class="about-title">{{$item->titulo}}</p>
                                <p class="about-slogan">{{ $item->slogan }}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="about-description">
                                            {{ $item->missao }}
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="about-description">
                                            {{ $item->visao }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <p class="calculator-hr"></p> --}}
                                {{-- <ul class="social-nav-about">
                                    <li class="social-nav-about-item">
                                        <img src="img/icons/003-facebook-logo-button.svg" alt="" class="img-circle ">
                                    

                                    </li>
                                    <li class="social-nav-about-item">
                                    
                                        <img src="img/icons/002-twitter-logo-button.svg" alt="" class="img-circle ">
                                    </li>
                                    <li class="social-nav-about-item">
                                    
                                        <img src="img/icons/arrows.svg" alt="" class="img-circle ">
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>