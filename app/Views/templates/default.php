<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= App::getInstance()->title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="index.php">Gestion de placement</a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="index.php">
            Accueil
          </a>
          <a class="navbar-item" href="?p=personnels.index">
            Personnels
          </a>
        </div>
        <!-- afficher options de connexion si non connecté -->
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Se connecter</strong>
              </a>
              <a class="button is-light">
                S'inscrire
              </a>
            </div>
          </div>
        </div>
        <!-- afficher options de profil et de deconnexion si connecté -->
      </div>
    </nav>

    <section class="section">
      <div class="container-fluid">
        <?= $content; ?>
    </section>
  </body>
</html>