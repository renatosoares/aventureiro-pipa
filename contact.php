<?php  require 'header.php'; ?>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'] ;

  $to = 'renatosoarespro@gmail.com';

  //mail($to, $subject, $message, 'From:' . $email);
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
            <li><i class="text-default fa fa-map-marker pr-5"></i>One infinity loop, 54100</li>
            <li><a href="tel:+00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+00 1234567890</a></li>
            <li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@theproject.com</a></li>
          </ul>
          <div class="separator"></div>
          <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
            <li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
            <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
            <li class="xing"><a target="_blank" href="http://www.xing.com/"><i class="fa fa-xing"></i></a></li>
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
        <div class="main col-md-12 space-bottom">
          <h2 class="title">Deixe-nos uma mensagem</h2>
          <div class="row">
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quisquam.</p>
              <div class="alert alert-success hidden" id="MessageSent">
                We have received your message, we will contact you very soon.
              </div>
              <div class="alert alert-danger hidden" id="MessageNotSent">
                Oops! Something went wrong please refresh the page and try again.
              </div>
              <?php echo $name; ?>
              <div class="contact-form">
                <form id="contact-form" class="margin-clear" role="form" action="contact.php" method="post">
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
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                    <i class="fa fa-navicon form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label for="message">Mensagem*</label>
                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                  </div>
                  <input type="submit" value="Enviar" class="submit-button btn btn-default">
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

  <!-- section start -->
  <!-- ================ -->
  <section class="section pv-40 parallax background-img-1 dark-translucent-bg" style="background-position:50% 60%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="call-to-action text-center">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title">Assine nossa NewsLetter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                <div class="separator"></div>
                <form class="form-inline margin-clear">
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="subscribe2">Email</label>
                    <input type="email" class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
                    <i class="fa fa-envelope form-control-feedback"></i>
                  </div>
                  <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Enviar <i class="fa fa-send"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- section end -->


<?php  require 'footer.php'; ?>
