<aside class="image-bg-fixed-height" id="contact">

    <div class="contact" id="contact">
        <div class="contact-container">
            <div class="container">

                <div class="row">
                    <p class="contact-title">Contato</p>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="contact-description">
                         @foreach($telefone as $fone)
                         <aside class="contact-number">{{$fone->fone}}</aside>

                            @endforeach

                             @foreach($endereco as $contatos)
                         <aside class="contact-endereco">{{$contatos->endereco}}</aside>
                         @endforeach
                     </p>
                 </div>
                 <div class="col-md-4"></div>
             </div>

             <div class="row">

                <div class="col-md-6">
                    <div class="contact-map">
                        <p id="map"></p>
                    </div>
                </div>

                <div class="col-md-6">
                    @if(Session::has('message'))

                    <div class="alert alert-success">
                        <strong> {{ Session::get('message') }}</strong> 
                    </div>


                    @endif

                    <div class="contact-form-item">
                        <div class="form">
                            {{ Form::open(array('action' => 'FrontController@contato', 'class' => 'col-sm-12 col-md-12 col-xs-12','role' => 'form')) }}
                            <form role="form" class=" col-sm-7 col-md-7 col-xs-12 col-md-offset-3">

                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control input-contact-form" required placeholder="Seu nome">
                                </div>
                                <div class="form-group">
                                    <input id="email" name="email" type="tel" class="form-control input-contact-form" required placeholder="Seu email">
                                </div>

                                <div class="form-group">
                                    <input id="assunto" name="assunto" type="tel" class="form-control input-contact-form" required placeholder="Assunto">
                                </div>

                                <div class="form-group">
                                    <textarea id="msg" name="msg" class="form-control input-contact-form" required placeholder="Mensagem" cols="8" rows="6"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="contact-button">Enviar</button>
                                </div>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</aside>