<section id="calculator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="calculator-title">
                    Calculadora de Churrasco
                </p>
                <p id="calculator-subtitle" class="text-center">
                    Saiba a quantidade de carne a ser consumida
                </p>
                <p class="calculator-description">
                    Quais são as carnes que você deseja
                </p>

                <div class="row">
                    <div id="section-buttons-calculator">
                        <div class="col-md-12">
                            <a class="calculator-button">Picanha</a>
                            <a class="calculator-button">Contra-filé</a>
                            <a class="calculator-button">Alcatra</a>
                            <a class="calculator-button">Maminha</a>
                            <a class="calculator-button">Filé-mignon</a>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <button class="calculator-button">Bananinha</button>
                            <button class="calculator-button">Costela</button>
                            <button class="calculator-button">Cupim</button>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <p class="calculator-description">
                        Quantas pessoas vão participar do churrasco?

                    </p>

                </div>
                <p class="calculator-hr"></p>

            
                <div class="row claculadora1">
                    <div class="calculator-define">
                        <div class="col-md-3">
                            <input type="text" id="calculator-input" placeholder="00">
                        </div>

                        <div class="col-md-3">
                            <p id="calculator-input-participants-number">Convidados</p>
                        </div>

                        <div class="com-md-3 bt-calculator">
                            <button href="" class="btn btn-trugee" data-element="#claculadora2" id="button-calculator" onclick="calculaChurrasco()">Calcular</button>
                        </div>
                    </div>
                </div>
                    <br>
                    <br>
                    <br>
                    <br>
                 <div class="row claculadora2" id="claculadora2" style="display:none;">
                    
                    <div class="row">
                    <div id="center-isto">
                        <div class="col-md-12">
                        <p id="linha"></p>
                        <div class="row">
                            <p id="total">Total</p>
                        <p id="valor-total"><input type="text" id="valor">g</p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>