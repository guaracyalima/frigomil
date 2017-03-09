<aside class="image-bg-fixed-height" id="contact">

    <div class="contact" id="contact">
        <div class="contact-container">
            <div class="container">

                <div class="row">
                    <p class="contact-title">Contato</p>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="contact-description">
                           @foreach($contato as $contatos)
                               <aside class="contact-number">{{$contatos->fone}}</aside>

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
                        <div class="contact-form-item">
                            <div class="form">
                                <form role="form" class=" col-sm-7 col-md-7 col-xs-12 col-md-offset-3">

                                    <div class="form-group">
                                        <input id="name" name="name" type="text" class="form-control input-contact-form" required placeholder="Seu nome">
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" name="phone" type="tel" class="form-control input-contact-form" required placeholder="Seu email">
                                    </div>

                                    <div class="form-group">
                                        <input id="phone" name="phone" type="tel" class="form-control input-contact-form" required placeholder="Assunto">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="message" name="msg" class="form-control input-contact-form" required placeholder="Mensagem" cols="8" rows="6"></textarea>
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