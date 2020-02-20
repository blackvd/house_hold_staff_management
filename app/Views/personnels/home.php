<nav class="navbar is-black" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-brad" href="index.php">Gestion de placement</a>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-item">
      <a class="button is-warning" href="?p=personnels.index">
        Personnels
      </a>
  </div>
    <!-- afficher options de connexion si non connecté -->
  <div class="navbar-end">
      <div id="navbarBasicExample" class="navbar-menu"> 
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="index.php?p=clients.login">
            <strong>Se connecter</strong>
          </a>
          <a class="button is-light" href="index.php?p=clients.signup">
            S'inscrire
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet"/>
<link rel="stylesheet" href="assets/color/default.css">


<script src="assets/js/modernizr.custom.js"></script>
 <section class="section">
  <div class="container-fluid">
    <ul id="slippry-slider">
      <li>
        <a href="#slide1"><img src="assets/img/slide/1.jpg" alt="GESTION DE PLACEMENT DE PERSONNES VOUS AIDE A CHOISIR DES PERSONNES DYNAMIQUES ET QUALIFIEES DANS PLUSIEURS DONAIMES"></a>
      </li>
      <li>
        <a href="#slide2"><img src="assets/img/slide/2.jpg"  alt="NOUS VOUS PRESENTONS DES PERSONNES DANS PLUSIEURS DOMAINES"></a>
      </li>
      <li>
        <a href="#slide3"><img src="assets/img/slide/3.jpg" alt="CES PERSONNES SONT EFFICACES DANS LEUR DOMAINE "></a>
      </li>
       <li>
        <a href="#slide2"><img src="assets/img/slide/4.jpg"  alt="N'ESITEZ PAS A NOUS CONATCTER"></a>
      </li>
      </li>
    </ul>
  </div>
</section>
  <!-- end intro -->
 
  <!-- section works -->

  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>

  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
<footer>
   <div class="verybottom">
      <div class="container">
          <div class="col-md-12">
            <div class="aligncenter">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
                &copy; Tous droits r&eacute;serv&eacute;s
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin
                -->
                 <a>Designed by Groupe 1</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</footer>