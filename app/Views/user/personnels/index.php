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
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="index.php?p=clients.login">
            <strong>D&eacute;connexion</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<section class="section">
  <div class="container-fluid">

    <h1 class="title is-1">Liste du personnel</h1>

    <div class="columns">
      <div class="column is-2">
        <h1 class="title is-4">Cat&eacute;gories</h1>
        <div class="list is-hoverable">
          <a href="index.php?p=personnels.index" class="list-item">Toutes les cat&eacute;gories</a>
          <?php foreach($categories as $categorie): ?>
            <a href="<?= $categorie->url; ?>" class="list-item"><?= $categorie->libelle; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="column is-10">
      <div class="container">
        <div class="columns">
          <?php foreach ($personnels as $personnel): ?>
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="media-content">
                      <p class="title is-4"><?= $personnel->nom ?></p>
                      <p class="subtitle is-6"><?= $personnel->prenoms ?></p>
                    </div>
                  </div>

                  <div class="content">
                    <?= $personnel->description; ?>
                  </div>
                </div>
                <footer class="card-footer">
                  <a href="#" id="modalLink" class="card-footer-item" data-toggle="modal" aria-haspopup="true" onclick="activeModal()">En savoir plus...</a>
                  <div id="modal" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                      <header class="modal-card-head">
                        <p class="modal-card-title">Avertissement</p>
                        <button class="delete" aria-label="close" onclick="deactivateModal()">
                          ::before
                          ::after
                        </button>
                      </header>
                      <section class="modal-card-body">Veuillez-vous connecter !!!</section>
                      <footer class="modal-card-foot">
                        <a href="index.php?p=clients.login" class="button is-success">Se connecter</a>
                        <button class="button" onclick="deactivateModal()">Annuler</button>
                      </footer>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        </div>
      </div>
      </div>
    </div>
</section>
<script>
  function activeModal(){
    var modal = document.getElementById('modal');
    modal.className += " is-active";
  }

  function deactivateModal(){
    var modal = document.getElementById('modal');
    modal.className = "modal";
  }
</script>