<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container about" id="about">
                    <aside class="about-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-img">
                                    <img src="{{ asset('img/about/1.jpg') }}" alt="" class="about-img img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                @foreach($sobre as $item)
                                <p class="about-title">{{$item->titulo}}</p>
                                <p class="about-slogan">{{ $item->slogan }}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="about-description">
                                            {{ $item->coldireita }}
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="about-description">
                                            {{ $item->coldesquerda }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                <p class="calculator-hr"></p>
                                <ul class="social-nav-about">
                                    <li class="social-nav-about-item">
                                        <img src="img/icons/003-facebook-logo-button.svg" alt="" class="img-circle ">
                                        {{--<i class="fa fa-facebook" aria-hidden="true"></i>--}}

                                    </li>
                                    <li class="social-nav-about-item">
                                        {{--<i class="fa fa-twitter" aria-hidden="true"></i>--}}
                                        <img src="img/icons/002-twitter-logo-button.svg" alt="" class="img-circle ">
                                    </li>
                                    <li class="social-nav-about-item">
                                        {{--<i class="fa fa-play" aria-hidden="true"></i>--}}
                                        <img src="img/icons/arrows.svg" alt="" class="img-circle ">
                                    </li>
                                </ul>
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