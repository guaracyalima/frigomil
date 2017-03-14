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
                                    <div class="col-md-12">
                                        <p class="about-description">
                                            {{ $item->coldireita }}
                                        </p>
                                        <p class="about-description">
                                            {{ $item->coldesquerda }}
                                        </p>
                                    </div>

                                </div>
                                @endforeach

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