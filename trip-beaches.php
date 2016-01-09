<?php  require 'header.php'; ?>


<?php require 'trip-banner.php'; ?>

  <!-- main-container start  -->
  <!-- ================ -->
  <section class="main-container padding-bottom-clear">

    <div class="container">
      <div class="row">

        <!-- main start -->
        <!-- ================ -->
        <div class="main col-md-12">
          <h3 class="title">PRAIAS DE <strong>PIPA</strong> (Catamarã e Escuna)</h3>
          <div class="separator-2"></div>
          <div class="row">
            <div class="col-md-6">
              <p>Local de embarque: Praia do Centro</p>
              <p>Saídas (diariamente): 10h30, 11h30, 13h30</p>
              <p>Roteiro:</p>
              <ul class="list-icons">
                <li><i class="icon-check-1"></i> Praia do Amor</li>
                <li><i class="icon-check-1"></i> Falésias do Chapadão, (Pedra símbolo de Pipa)</li>
                <li><i class="icon-check-1"></i> Baía dos Golfinhos</li>
                <li><i class="icon-check-1"></i> Praia do Madeiro</li>
                <li><i class="icon-check-1"></i> Praia de Cacimbinhas</li>
              </ul>
              <p>Duração: 01 hora e 30 minutos</p>
            </div>
            <div class="col-md-6">
              <div class="owl-carousel content-slider-with-controls">
                <div class="overlay-container overlay-visible">
                  <img src="images/praias.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/praias.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                  <img src="images/passeio-lancha.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/passeio-lancha.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                  <img src="images/praia-golfinho.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/praia-golfinho.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main end -->
        <!-- preços e pagamentos -->
      <div class="main col-md-12">   
        <p>Preços:</p>
              <div class="col-md-6 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <p>Adulto: R$50,00</p>
                  <p>Pague on-line e economize 10%</p>
                <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                <input type="hidden" name="itemCode" value="DE38EB303030C56DD4904F9CAE162269" />
                <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                </form>
                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                </div>
              </div>
  
              <div class="col-md-6 "> 
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <p>Criança: R$30,00 (de 06 à 10 anos)</p>
                <p>Pague on-line e economize 10%</p>
                <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                <input type="hidden" name="itemCode" value="33A4E91726264DB224B9BF80FE0790A9" />
                <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                </form>
                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                </div>  
              </div>
              <p>Após o pagamento reserve a data do seu passeio</p>    
      </div>      
      <!-- final de preços e pagamentos -->

      </div>
    </div>
</section>

  <div class="clearfix"></div>
  <!-- section end -->


<?php require 'footer.php'; ?>
