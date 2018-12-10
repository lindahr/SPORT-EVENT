 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>sport event sousse</title>


      </script>
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="_token" content="{{{ csrf_token() }}}"/>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/espace.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>


<!--==========================
      Contact Section
    ============================-->
    <section id="contact" >
      <div class="container">

        <div class="section-header">
          <h1>Formulaire d'Inscription</h1>
          <p>Votre demande d'inscription sera validée quand vous aurez complété et soumis le formulaire ci-dessous. </p>
        </div>

       

        <div class="form">
          <div id="sendmessage"> insecrit succee</div>
          <div id="errormessage"></div>
          <form action="/inscrie" method="post" role="form" >
             @csrf


            <div class="form-row">
              
              <div class="form-group col-md-5">
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-1"></div>
              <div class="form-group col-md-5">
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

             <div class="form-group col-md-5">
                <input type="number" name="Telephone" class="form-control" id="Telephone" placeholder="Telephone" data-rule="minlen:4" data-msg="Please enter at least 7 number" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-1"></div>
              <div class="form-group col-md-5">
                <input type="date" name="name" class="form-control" id="date" data-rule="minlen:4" data-msg="date de naissance" />
                <div class="validation"></div>
              </div>


            <div class="form-group col-md-5">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-1"></div>
              <div class="form-group col-md-5">
                <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse " data-rule="minlen:4" data-msg="Please enter a valide adresse " />
                <div class="validation"></div>
              </div>

                
            <div class="form-group col-md-5">
              
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" data-rule="minlen:4" data-msg="Please enter a valid mot de passe" />
                <div class="validation"></div>
              </div>

                
                 <div class="form-group col-md-1"></div>
              <div class="form-group col-md-5">
                  <input type="password" name="confirmpass" class="form-control" id="confirmpass" placeholder="Confirmation du mot de passe" data-rule="minlen:4" data-msg="Please enter a valid mot de passe" />
          <div class="validation"></div>
              </div>


               





            
            <div class="text-center" ><button type="submit">s'insecrit </button></div>
          </form>
        </div>

      </div>
    </section>
    <!-- #contact -->

  

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="/Acceuil">Acceuil</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/info">Info</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Liste des evenments">Liste des événments </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Liste de salle">Liste des salles</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Creation Evenment">Creation Evenment</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/Contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>





</body>
</html>
