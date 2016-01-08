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
          <h3 class="title">PÔR DO <strong>SOL</strong></h3>
          <div class="separator-2"></div>
          <div class="row">
            <div class="col-md-6">
              <p>Passeio de Catamarã pela Lagoa de Guarairas com almoço e bebidas livre.
                Vocês terão visões exclusivas deste cenário formado por ilhas e praias paradisíacas.
                Será possível tomar banhos e fazer paradas apreciando a beleza da paisagem.
                O lindo espetáculo do pôr do sol na lagoa, será inesquecível!</p>
              <p>Roteiro:</p> 
              <ul class="list-icons">
                <li><i class="icon-check-1"></i> Baía dos Golfinhos</li>
                <li><i class="icon-check-1"></i> Praia do Madeiro</li>
                <li><i class="icon-check-1"></i> Praia de Cacimbinha</li>
                <li><i class="icon-check-1"></i> Praia do Giz</li>
                <li><i class="icon-check-1"></i> Lagoa de Guaraíras</li>
              </ul>
              <p>Almoço:</p> 
              <ul class="list-icons">
                <li><i class="icon-check-1"></i> Petiscos e bruschettas</li>
                <li><i class="icon-check-1"></i> Espetos de peixe, camarão e frango</li>
                <li><i class="icon-check-1"></i> Arroz, salada e frutas</li>
              </ul>
              <p>Bebidas:</p> 
              <ul class="list-icons">
                <li><i class="icon-check-1"></i> Caipirinha, caipiroska, caipifruta, cerveja, refrigerante e agua.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="owl-carousel content-slider-with-controls">
                <div class="overlay-container overlay-visible">
                  <img src="images/catamara2.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/catamara.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                  <img src="images/catamara-por-sol.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/catamara-por-sol.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                  <img src="images/comida_slide.jpg" alt="">
                  <div class="overlay-bottom hidden-xs">
                  </div>
                  <a href="images/comida.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
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
                  <p>Adulto: R$185,00</p>
                  <p>Pague on-line e economize 10%</p>
                  <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                  <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                  <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                  <input type="hidden" name="itemCode" value="663241DC71717BEDD48AAF818E85BCD5" />
                  <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                  </form>
                  <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                </div>
              </div>
  
              <div class="col-md-6 "> 
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <p>Criança: R$130,00 (de 06 à 10 anos)</p>
                <p>Pague on-line e economize 10%</p>
                <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                <input type="hidden" name="itemCode" value="7EBA3B4E6868A0C994E60F9C94377277" />
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
