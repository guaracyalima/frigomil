<!-- Content Section -->
<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading">Produtos</h1>
                <div class="products-buttons">
                    <button class="rectangle filter-button" data-filter="all">Carnes</button>
                    <button class="rectangle filter-button" data-filter="miudosBrancos">Miudos Brancos</button>
                    <button class="rectangle filter-button " data-filter="miudosVermelhos">Miudos vermelhos</button>
                    <button class="rectangle filter-button" data-filter="freio recortes">Recortes</button>
                </div>

                <div class="owl-carousel owl-theme">
                    @foreach($produtos as $produto)
                    <div class="item">

                        <div class="product-box filter miudosBrancos">
                            <img src="{{ asset('img/products/0.jpg') }}" alt="{{$produto->descricao}}" class="img-responsive products-img">
                            <div class="text-and-price-box">

                                <p class="product-name">{{ $produto->nome }}</p>
                                <p class="product-size">Peso: <strong>{{ $produto->peso }}</strong></p>
                                <p class="product-supplier">Fornecedor <strong>{{$produto->fornecedor}}</strong></p>
                            </div>
                        </div>

                        <div class="product-box filter miudosVermelhos">
                            <img src="{{ asset('img/products/0.jpg') }}" alt="" class="img-responsive products-img">
                            <div class="text-and-price-box">
                                <p class="product-name">{{ $produto->nome }}</p>
                                <p class="product-size">Peso: <strong>{{ $produto->peso }}</strong></p>
                                <p class="product-supplier">Fornecedor <strong>{{$produto->fornecedor}}</strong></p>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>