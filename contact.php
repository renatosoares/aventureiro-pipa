<?php  require 'header.php'; ?>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'] . "\n Essa mensagem foi enviad por:" . $name;

  $to = 'renatosoarespro@gmail.com';

  mail($to, $subject, $message, 'From:' . $email);

  $alert = "hidden";
  if ($_POST["submit"]) {
    $alert = "";
  }

 ?>

  <!-- banner start -->
  <!-- ================ -->
  <div class="banner dark-translucent-bg" style="background-image:url('images/background-img-3.jpg'); background-position: 50% 30%;">
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
      <div class="container">
        <ol class="breadcrumb">
          <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.php">Home</a></li>
          <li class="active">Contato</li>
        </ol>
      </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center col-md-offset-2 pv-20">
          <h1 class="page-title text-center">Fale conosco</h1>
          <div class="separator"></div>
          <p class="lead text-center">Seria ótimo ouvir de você! Apenas deixe algumas linhas e sugira qualquer coisa com a qual você acha que poderia ser útil. Estamos ansiosos para ouvir de você!
</p>
          <ul class="list-inline mb-20 text-center">
            <li><i class="text-default fa fa-map-marker pr-5"></i>Praia de Pipa, RN, Brasil</li>
            <li><a href="tel:+55 84 999252922" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+55 84 999252922</a></li>
            <li><a href="contact.php?assunto=Reserva#message" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>reservas@aventureiropipa.com</a></li>
          </ul>
          <div class="separator"></div>
          <ul class="social-links circle animated-effect-1">
                <li class="facebook"><a target="_blank" href="https://www.facebook.com/Aventureiro-Passeios-de-Barco-104219146282250/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a target="_blank" href="https://twitter.com/aventureiropipa"><i class="fa fa-twitter"></i></a></li>
                <li class="googleplus"><a target="_blank" href="https://plus.google.com/115363997268211609732/about"><i class="fa fa-google-plus"></i></a></li>
                <li class="instagram"><a target="_blank" href="https://www.instagram.com/aventureiropasseiosdebarco/"><i class="fa fa-instagram"></i></a></li>
                <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCChv2KdaMMPaKet2rZAM8xw"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- main-container start -->
  <!-- ================ -->
  <section class="main-container">

    <div class="container">
      <div class="row">

        <!-- main start -->
        <!-- ================ -->
        <div class="main col-md-12 space-bottom" id="message">
          <h2 class="title">Deixe-nos uma mensagem</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="alert alert-success  <?php echo $alert; ?>" id="MessageSent">
                Recebemos sua mensagem, em breve vamos entrar em contato.
              </div>
              <div class="alert alert-danger hidden" id="MessageNotSent">
                Oops! Something went wrong please refresh the page and try again.
              </div>

              <div class="contact-form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="margin-clear" role="form">
                <!-- <form id="contact-form" class="margin-clear" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> -->
                  <div class="form-group has-feedback">
                    <label for="name">Nome*</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                    <i class="fa fa-user form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                    <i class="fa fa-envelope form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label for="subject">Assunto*</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Ex.: Sugestão, Reserva, Horário..." value="<?php $subjectValue = ($_GET['assunto']) ? "Reservas" : "" ; echo $subjectValue; ?>">
                    <i class="fa fa-navicon form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label for="message">Mensagem*</label>
                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                  </div>
                  <input type="submit" name="submit" value="Enviar" class="submit-button btn btn-default">
                </form>

              </div>
            </div>
            <div class="col-md-6">
              <div id="map-canvas"></div>
            </div>
          </div>
        </div>
        <!-- main end -->
      </div>
    </div>
  </section>
  <!-- main-container end -->

  <div class="clearfix"></div>
  <!-- section end -->


<?php  require 'footer.php'; ?>
