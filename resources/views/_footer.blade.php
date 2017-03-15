<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p id="back-to-top" class="text-center">
                    <a href="#"><i class="fa fa-angle-up" aria-hidden="true" id="got-to-top"></i></a>
                </p>
                <p class="footer-hr"></p>
                <div class="col-md-4 footer-address">
                 <p id="principalfooter"> <span id="footer-enterprise-show">Frigomil</span> | Pimenta bueno/RO</p>
                 <p id="endereco">
                    @foreach($contatos as $contato)
                    <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $contato->endereco }}
                    @endforeach
                </p>

                    @foreach($email as $email)
                <p id="mail">

                    <i class="fa fa-envelope" aria-hidden="true"></i> {{ $email->email }}
                    
                </p>
                    @endforeach


                <p id="phone-contact"> <i class="fa fa-phone" aria-hidden="true"></i> 69 3451-9000  <i class="fa fa-phone" aria-hidden="true"></i> 69 3451-8000</p>

            </div>

            <div class="col-md-4">
                <p class="footer-copyrigth">
                    Desenvolvido pela <strong> Mangue tecnologia</strong>
                </p>
            </div>
            <div class="col-md-4">
                <ul class="social-nav text-center">
                    <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</footer>