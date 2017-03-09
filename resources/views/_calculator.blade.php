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
                            <a href="#" class="calculator-button">Picanha</a>
                            <a href="#" class="calculator-button">Contra-filé</a>
                            <a href="#" class="calculator-button">Alcatra</a>
                            <a href="#" class="calculator-button">Maminha</a>
                            <a href="#" class="calculator-button">Filé-mignon</a>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <a href="#" class="calculator-button">Bananinha</a>
                            <a href="#" class="calculator-button">Costela</a>
                            <a href="#" class="calculator-button">Cupim</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <p class="calculator-description">
                        Quantas pessoas vão participar do churrasco?

                    </p>

                </div>
                <p class="calculator-hr"></p>

                <div class="row claculadora2" id="claculadora2" style="display:none;">
                    <p id="produtcts-selected">Churrasco de : Name & Name</p>
                    <div class="row">
                    <div class="col-md-6 resultado col-md-offset-4">

                        <i class="fa fa-user" aria-hidden="true" id="convidados-icon"></i>
                        <input type="text" id="calculator-input-participants-number" placeholder="0"><i id="convidados">Convidados</i>
                    </div>
                    </div>
                    <div class="row">
                    <div id="center-isto">
                        <div class="col-md-10">
                        <p id="linha"></p>
                        <div class="row">
                            <p id="total">Total</p>
                        <p id="valor-total"><input type="text" id="valor">kg</p>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>

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

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>